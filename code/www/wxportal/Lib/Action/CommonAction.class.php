<?php
class CommonAction extends Action{
	//调用所有方法时都会触发此方法
	public function _initialize(){
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
