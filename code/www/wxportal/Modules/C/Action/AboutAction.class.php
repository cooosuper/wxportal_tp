<?php
// 本类由系统自动生成，仅供测试用途
class AboutAction extends CommonAction {
    public function index(){
    	$this->gy = 'current';
    	$this->group_name = GROUP_NAME;
        $this->loginTips = '欢迎您，' . $_SESSION['ulogname'];
        $this->display();
//        die;
//        echo 'This is C index';
//        $tb_user = M('user'); // 实例化user数据模型
//        $this->data_user = $tb_user->select();
//        $this->display();
//        die;
//        $this->name = 'thinkphp'; // 进行模板变量赋值
//        $this->display();
    }
}
