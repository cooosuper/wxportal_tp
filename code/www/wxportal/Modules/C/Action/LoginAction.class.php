<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
    public function index(){
        $this->display();
    }

    public function handleLogin(){
        echo 'handleLogin';
        echo I('name');
        $_SESSION['uid'] = I('name');
        $this->redirect(GROUP_NAME . '/Index/index');
    }

    public function logout(){
        echo 'logout';
        $_SESSION['uid'] = null;
        $this->redirect(GROUP_NAME . '/Index/index');
    }
}
