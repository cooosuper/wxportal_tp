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
}
