<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
    public function index(){
        $this->group_name = GROUP_NAME;
        $this->display();
    }

    public function handleLogin(){
        $uname = I('loginName');
        $upsd = I('loginPassword');

        if($_SESSION['verify'] != md5(I('verify'))){
            echo 'verify_failure';
        }else{
            $user = M('user');
            $where = "logname='" . $uname . "'";
            $result = $user->where($where)->limit(1)->find();
            $password = $result['logpassword'];
            if($upsd == $password){
                session('uid', $result['id']);
                session('ulogname', $uname);
                echo 'success';
            }else{
                echo 'login_fail';
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
