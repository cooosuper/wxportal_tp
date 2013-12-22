<?php
// 本类由系统自动生成，仅供测试用途
class RegisterAction extends Action {
    public function index(){
        $this->group_name = GROUP_NAME;
        $this->display();
    }

    public function handleRegister(){
        $accountName = I('accountname');
        $verify = I('verify');

        // 验证码判断
        if($_SESSION['verify'] != md5($verify)){
            echo 'verify_failure';
        }else{
            $user = M('user');
            $where = "accountname='" . $accountName . "'";
            $list = $user->where($where)->select();
            
            if(count($list) > 0){
                echo 'user_exist';
            }else{
                $user->create();
                $result = $user->add();
                if($result > 0){
                    session('uid', $result);
                    session('accountName', $accountName);
                    echo 'success';
                }else{
                    echo 'add_fail';
                }
            }
        }
    }

    function verify(){
        import('ORG.Util.Image');
        ob_end_clean();//否则会出现“因图片本身错误无法显示”
        //英文验证码
        Image::buildImageVerify();
    }
}
