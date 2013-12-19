<?php
class CommonAction extends Action{
	//调用所有方法时都会触发此方法
	public function _initialize(){
		if(!isset($_SESSION['uname'])){
			$this->redirect(GROUP_NAME . '/Login/index');
		}
	}

	public function logout(){
		echo 'logout';
		$_SESSION['uname'] = null;
		$this->redirect(GROUP_NAME . '/Index/index');
	}
}
?>
