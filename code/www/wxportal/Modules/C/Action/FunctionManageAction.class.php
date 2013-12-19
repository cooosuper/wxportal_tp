<?php
// 本类由系统自动生成，仅供测试用途
class FunctionManageAction extends CommonAction {
	public function index(){
		$this->gl = 'current';
		$this->group_name = GROUP_NAME;
		$this->loginTips = '欢迎您，' . $_SESSION['uname'];
		$this->gnxz = blue;
		$this->display();
	}

	public function watchedMsg(){
		$this->gl = 'current';
		$this->group_name = GROUP_NAME;
		$this->loginTips = '欢迎您，' . $_SESSION['uname'];
		$this->gzshf = blue;
		$this->display('watchedMsg');
	}

	public function textResp(){
		$this->gl = 'current';
		$this->group_name = GROUP_NAME;
		$this->loginTips = '欢迎您，' . $_SESSION['uname'];
		$this->zdywbhf = blue;
		$this->display('textResp');
	}

	public function musicResp(){
		$this->gl = 'current';
		$this->group_name = GROUP_NAME;
		$this->loginTips = '欢迎您，' . $_SESSION['uname'];
		$this->zdyyyhf = blue;
		$this->display('musicResp');
	}

	public function newsResp(){
		$this->gl = 'current';
		$this->group_name = GROUP_NAME;
		$this->loginTips = '欢迎您，' . $_SESSION['uname'];
		$this->zdytwhf = blue;
		$this->display('newsResp');
	}

	public function unknownResp(){
		$this->gl = 'current';
		$this->group_name = GROUP_NAME;
		$this->loginTips = '欢迎您，' . $_SESSION['uname'];
		$this->bzdsdf = blue;
		$this->display('unknownResp');
	}

	public function gDefine(){
		$this->gl = 'current';
		$this->group_name = GROUP_NAME;
		$this->loginTips = '欢迎您，' . $_SESSION['uname'];
		$this->gzsz = blue;
		$this->display('gDefine');
	}
}
