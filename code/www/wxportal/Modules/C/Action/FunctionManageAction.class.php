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

        //查找数据库，看是否已经配置过不知道时回复
        $Model = new Model();
        $sql = "select * from wxaccount_textresp as m, textresp as t where m.wxaccountid_to_text = " . I('wxaccountid') . " and m.textrespid = t.id and t.keyword = 'watched';";
        $result = $Model->query($sql);

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
        
        //查找数据库，看是否已经配置过不知道时回复
        $Model = new Model();
        $sql = "select * from wxaccount_textresp as m, textresp as t where m.wxaccountid_to_text = " . I('wxaccountid') . " and m.textrespid = t.id and t.keyword != 'unknown' and t.keyword != 'watched' order by t.id desc;";
        $result = $Model->query($sql);

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


        //查找数据库，看是否已经配置过不知道时回复
        $Model = new Model();
        $sql = "select * from wxaccount_textresp as m, textresp as t where m.wxaccountid_to_text = " . I('wxaccountid') . " and m.textrespid = t.id and t.keyword = 'unknown';";
        $result = $Model->query($sql);

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
        $data['keyword'] = 'unknown';
        $data['content'] = I('unknownRespText');
        //原生删除
        $Model = new Model();
        $sql = "delete m, t from wxaccount_textresp as m, textresp as t where m.textrespid = t.id and t.keyword = 'unknown';";
        $result = $Model->execute($sql);

        $textresp = M('textresp');
        $result = $textresp->add($data);

        if($result > 0){
            $wxaccount_textresp = M('wxaccount_textresp');
            $data['wxaccountid_to_text'] = I('wxaccountid');
            $data['textrespid'] = $result;

            $wxaccount_textresp_result = $wxaccount_textresp->add($data);
            if($wxaccount_textresp_result > 0){
                echo 'success';
            }else{
                $textresp->where('id=' . $result)->delete();
                echo 'add_fail';
            }
        }else{
            echo 'add_fail';
        }
    }

    public function setWatchedResp(){
        $data['keyword'] = 'watched';
        $data['content'] = I('watchedRespText');
        //原生删除
        $Model = new Model();
        $sql = "delete m, t from wxaccount_textresp as m, textresp as t where m.textrespid = t.id and t.keyword = 'watched';";
        $result = $Model->execute($sql);

        $textresp = M('textresp');
        $result = $textresp->add($data);

        if($result > 0){
            $wxaccount_textresp = M('wxaccount_textresp');
            $data['wxaccountid_to_text'] = I('wxaccountid');
            $data['textrespid'] = $result;

            $wxaccount_textresp_result = $wxaccount_textresp->add($data);
            if($wxaccount_textresp_result > 0){
                echo 'success';
            }else{
                $textresp->where('id=' . $result)->delete();
                echo 'add_fail';
            }
        }else{
            echo 'add_fail';
        }
    }

    public function setTextResp(){
        $data['keyword'] = I('keyword');
        $data['content'] = I('textRespText');

        //原生删除
        $Model = new Model();
        $sql = "delete m, t from wxaccount_textresp as m, textresp as t where m.textrespid = t.id and t.keyword = '" . I('keyword') . "';";
        $result = $Model->execute($sql);

        $textresp = M('textresp');
        $result = $textresp->add($data);

        if($result > 0){
            $wxaccount_textresp = M('wxaccount_textresp');
            $data['wxaccountid_to_text'] = I('wxaccountid');
            $data['textrespid'] = $result;

            $wxaccount_textresp_result = $wxaccount_textresp->add($data);
            if($wxaccount_textresp_result > 0){
                echo 'success';
            }else{
                $textresp->where('id=' . $result)->delete();
                echo 'add_fail';
            }
        }else{
            echo 'add_fail';
        }
    }
    
    public function delTextResp(){
        echo I('textrespid');
        
        //原生删除
        $Model = new Model();
        $sql = "delete m, t from wxaccount_textresp as m, textresp as t where m.textrespid = ". I('textrespid') ." and t.id = " . I('textrespid') . ";";
        $result = $Model->execute($sql);
        
        $this->redirect('/FunctionManage/textResp/wxaccountid/' . I('wxaccountid'));
    }
}
