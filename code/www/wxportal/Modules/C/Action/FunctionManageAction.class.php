<?php
// 本类由系统自动生成，仅供测试用途
class FunctionManageAction extends CommonAction {
    public function index(){
        $this->gl = 'current';
        $this->gnxz = blue;
        
        setLoginTips($this);
        getWxAccount($this);
        $this->display();
    }

    public function watchedMsg(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->gzshf = blue;

        getWxAccount($this);
        $this->display('watchedMsg');
    }

    public function textResp(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->zdywbhf = blue;

        getWxAccount($this);
        $this->display('textResp');
    }

    public function musicResp(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->zdyyyhf = blue;

        getWxAccount($this);
        $this->display('musicResp');
    }

    public function newsResp(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->zdytwhf = blue;

        getWxAccount($this);
        $this->display('newsResp');
    }

    public function unknownResp(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->bzdsdf = blue;

        getWxAccount($this);
        $this->display('unknownResp');
    }

    public function gDefine(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->gzsz = blue;

        getWxAccount($this);
        $this->display('gDefine');
    }


}
