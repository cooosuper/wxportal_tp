<?php
// 本类由系统自动生成，仅供测试用途
class ManageAction extends CommonAction {
	public function index(){
		$this->gl = 'current';
		$this->group_name = GROUP_NAME;
		$this->left_menu = 0;
		$this->display();
	}
	
	public function myWxAccount(){
		$this->gl = 'current';
		$this->group_name = GROUP_NAME;
		$this->left_menu = 1;
		$this->display('myWxAccount');
	}
	
	public function addWXaccount(){
		$this->gl = 'current';
		$this->group_name = GROUP_NAME;
		$this->left_menu = 2;
		$this->display('addWXaccount');
	}
}
