<?php
// 本类由系统自动生成，仅供测试用途
class ManageAction extends CommonAction {
    public function index(){
        $this->gl = 'current';
        $this->group_name = GROUP_NAME;
        $this->loginTips = '欢迎您，' . $_SESSION['ulogname'];
        $this->left_menu = 0;

        $user = M('user');
        $where = "logname='" . session('ulogname') . "'";
        $result = $user->where($where)->limit(1)->find();

        $this->curUser = $result;

        $this->display();
    }

    public function myWxAccount(){
        $this->gl = 'current';
        $this->group_name = GROUP_NAME;
        $this->loginTips = '欢迎您，' . $_SESSION['ulogname'];
        $this->left_menu = 1;
        $this->display('myWxAccount');
    }

    public function addWXaccount(){
        $this->gl = 'current';
        $this->group_name = GROUP_NAME;
        $this->loginTips = '欢迎您，' . $_SESSION['ulogname'];
        $this->left_menu = 2;

        $this->userid = session('uid');
        $this->display('addWXaccount');
    }

    public function fillPersonInfo(){
        $user = M('user');
        // 需要更新的数据
        $data['name'] = I('name');
        $data['creditcard'] = I('creditcard');
        $data['phonenumber'] = I('phonenumber');
        $data['address'] = I('address');
        $data['isactive'] = 1;
        // 更新的条件
        $condition['id'] = session('uid');
        $result = $user->where($condition)->save($data);


        if($result != false){
            echo 'success';
        }else{
            echo 'submit_fail';
        }
    }

    public function doAddWxAccount(){
        $wxaccount = M('wxaccount');

        $where = "name='" . I('name') . "'";
        $name_list = $wxaccount->where($where)->select();

        $where = "orgid='" . I('orgid') . "'";
        $orgid_list = $wxaccount->where($where)->select();

        $where = "token='" . I('token') . "'";
        $token_list = $wxaccount->where($where)->select();

        $where = "account='" . I('account') . "'";
        $account_list = $wxaccount->where($where)->select();
        if(count($name_list) > 0){
            echo 'name_exist';
        }else if(count($orgid_list) > 0){
            echo 'orgid_exist';
        }else if(count($account_list) > 0){
            echo 'account_exist';
        }else if(count($token_list) > 0){
            echo 'token_exist';
        }else{
            $wxaccount->create();
            $result = $wxaccount->add();

            if($result > 0){
                $user_wxaccount = M('user_wxaccount');
                $data['userid'] = session('uid');
                $data[wxaccountid] = $result;
                $user_wxaccount_result = $user_wxaccount->add($data);
                if($user_wxaccount_result > 0){
                    echo 'success';
                }else{
                    $wxaccount->where('id=' . $result)->delete();
                    echo 'add_fail';
                }
            }else{
                echo 'add_fail';
            }
        }
    }
}
