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

    public function watchedResp(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->gzshf = blue;

        getWxAccount($this);

        $textresp = M('textresp');
        $condition['wxaccountid'] = I('wxaccountid');
        $condition['keyword'] = 'watched';

        $result = $textresp->where($condition)->select();

        $this->textResp = $result[0];
        if(count($result) > 0){
            $this->count = 1;
        }else{
            $this->count = 0;
        }

        $this->display('watchedResp');
    }

    public function textResp(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->zdywbhf = blue;
        getWxAccount($this);
        
        $textresp = M('textresp');
        $condition = "wxaccountid = " . I('wxaccountid') . " and keyword != 'watched' and keyword != 'unknown'";
        $result = $textresp->where($condition)->order('id desc')->select();

        $this->textResps = $result;
        if(count($result) > 0){
            $this->count = count($result);
        }else{
            $this->count = 0;
        }

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


        $textresp = M('textresp');
        $condition['wxaccountid'] = I('wxaccountid');
        $condition['keyword'] = 'unknown';

        $result = $textresp->where($condition)->select();

        $this->textResp = $result[0];
        if(count($result) > 0){
            $this->count = 1;
        }else{
            $this->count = 0;
        }

        $this->display('unknownResp');
    }

    public function gDefine(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->gzsz = blue;

        getWxAccount($this);
        $this->display('gDefine');
    }

    public function setUnknownResp(){
        $textresp = M('textresp');

        $condition['wxaccountid'] = I('wxaccountid');
        $condition['keyword'] = 'unknown';

        $result = $textresp->where($condition)->delete();


        $data['keyword'] = 'unknown';
        $data['content'] = I('unknownRespText');
        $data['wxaccountid'] = I('wxaccountid');

        $textresp = M('textresp');
        $result = $textresp->add($data);

        if($result > 0){
            echo 'success';
        }else{
            echo 'add_fail';
        }
    }

    public function setWatchedResp(){
        $textresp = M('textresp');

        $condition['wxaccountid'] = I('wxaccountid');
        $condition['keyword'] = 'watched';

        $result = $textresp->where($condition)->delete();


        $data['keyword'] = 'watched';
        $data['content'] = I('watchedRespText');
        $data['wxaccountid'] = I('wxaccountid');

        $textresp = M('textresp');
        $result = $textresp->add($data);

        if($result > 0){
            echo 'success';
        }else{
            echo 'add_fail';
        }
    }

    public function setTextResp(){
        $textresp = M('textresp');

        $condition['wxaccountid'] = I('wxaccountid');
        $condition['keyword'] = I('keyword');
        $result = $textresp->where($condition)->delete();

        $data['keyword'] = I('keyword');
        $data['content'] = I('textRespText');
        $data['wxaccountid'] = I('wxaccountid');

        $result = $textresp->add($data);

        if($result > 0){
            echo 'success';
        }else{
            echo 'add_fail';
        }
    }

    public function delTextResp(){
        $textresp = M('textresp');
        $textresp->delete(I('textrespid'));

        $this->redirect('/FunctionManage/textResp/wxaccountid/' . I('wxaccountid'));
    }
}
