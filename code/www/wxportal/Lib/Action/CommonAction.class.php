<?php
class CommonAction extends Action{
    //调用所有方法时都会触发此方法
    public function _initialize(){
        if(I('wxaccountid') != null){
            $wxaccount = M('wxaccount');
            $condition['id'] = I('wxaccountid');
            $condition['userid'] = session('uid');
            $result = $wxaccount->where($condition)->select();
            if(count($result) <= 0){
                $this->error("地址不合法");
            }
        }
        if(!isset($_SESSION['uid'])){
            $this->redirect(GROUP_NAME . '/Login/index');
        }
    }

    public function logout(){
        session(null);
        $this->redirect(GROUP_NAME . '/Index/index');
    }
}
?>
