<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
	public function index(){
		$this->group_name = GROUP_NAME;
		$this->display();
	}

	public function handleLogin(){
		session('uname', I('name'));
		session('upsd', I('password'));
		if($_SESSION['verify']!=md5(I('verify'))){
			$this->error('验证码不正确');
		}
		$this->redirect(GROUP_NAME . '/Index/index');
	}

	function verify(){
		import('ORG.Util.Image');
		ob_end_clean();//否则会出现“因图片本身错误无法显示”
		//英文验证码
		Image::buildImageVerify();
	}
}
