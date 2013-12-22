<?php
// 本类由系统自动生成，仅供测试用途
class ManageAction extends CommonAction {
    public function index(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->left_menu = 0;

        $user = M('user');
        $where = "accountname='" . session('accountName') . "'";
        $result = $user->where($where)->limit(1)->find();

        $this->curUser = $result;

        $this->display();
    }

    public function myWxAccount(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->left_menu = 1;


        //原生查询
        $wxaccount = M('wxaccount');
        $result = $wxaccount->where("userid=" . session('uid') . "")->order('id desc')->select();
        $this->wxaccounts = $result;
        if(count($result) > 0){
            $this->count = 1;
        }else{
            $this->count = 0;
        }

        $this->display('myWxAccount');
    }

    public function addWXaccount(){
        $this->gl = 'current';
        setLoginTips($this);
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
            $data['userid'] = session('uid');
            $data['name'] = I('name');
            $data['orgid'] = I('orgid');
            $data['token'] = I('token');
            $data['account'] = I('account');
            $data['area'] = I('area');

            $result = $wxaccount->add($data);

            if($result > 0){
                echo 'success';
            }else{
                echo 'add_fail';
            }
        }
    }

    public function delWxAccount(){
        $wxaccount = M('wxaccount');
        $wxaccount->delete(I('wxaccountid'));

        $this->redirect('/Manage/myWxAccount');
    }

    public function editWxAccount(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->left_menu = 1;


        $this->userid = session('uid');

        $wxaccount = M('wxaccount');
        $result = $wxaccount->where('id='.I('wxaccountid'))->select();

        $this->wxaccount = $result[0];

        $this->display('editWxAccount');
    }

    public function doEditWxAccount(){
        $wxaccount = M('wxaccount');
        // 需要更新的数据
        $data['name'] = I('name');
        $data['orgid'] = I('orgid');
        $data['account'] = I('account');
        $data['token'] = I('token');
        $data['area'] = I('area');
        // 更新的条件
        $condition['id'] = I('id');
        $result = $wxaccount->where($condition)->save($data);

        if($result != false){
            echo 'success';
        }else{
            echo 'submit_fail';
        }
    }
}
