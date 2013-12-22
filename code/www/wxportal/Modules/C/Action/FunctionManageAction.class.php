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

    public function newResp(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->zdydytwhf = blue;

        getWxAccount($this);

        $newsresp = M('newsresp');
        $condition['wxaccountid'] = I('wxaccountid');
        $result = $newsresp->where($condition)->select();

        if(count($result) > 0){
            $this->count = count($result);
        }else{
            $this->count = 0;
        }

        //        $this->newsResps = $result;
        $newsresp = D('newsresp');

        import('ORG.Util.Page');// 导入分页类

        $count = $newsresp->where("sort = -1 and wxaccountid = " . I('wxaccountid') . "")->count();//得到总数

        $p = new Page($count,5);//每页5条数据
        $list = $newsresp->where("sort = -1 and wxaccountid = " . I('wxaccountid') . "")->limit($p->firstRow.','.$p->listRows)->order('id desc')->select();
        //        $p->setConfig('header','条记录');
        //        $p->setConfig('prev',"上一页");
        //        $p->setConfig('next','下一页');
        //        $p->setConfig('first','首页');
        //        $p->setConfig('last','末页');
        //        $p->setConfig('theme', ' %totalRow% %header% %nowPage%/%totalPage% 页 %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
        $page = $p->show(1);
        $this->assign('page',$page);
        $this->assign('list',$list);

        $this->display('newResp');
    }

    public function newsResp(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->zdytwhf = blue;

        getWxAccount($this);

        $newsresp = M('newsresp');
        $condition['wxaccountid'] = I('wxaccountid');
        $result = $newsresp->where("wxaccountid=" . I('wxaccountid') . " and sort != -1")->distinct(true)->field('keyword')->select();

        if(count($result) > 0){
            $this->count = count($result);
        }else{
            $this->count = 0;
        }

        if(I('curNewsIndex') == null | I('curNewsIndex') > count($result) - 1){
            $newsIndex = 0;
        } else if(I('curNewsIndex') < 0){
            $newsIndex = count($result) - 1;
        } else{
            $newsIndex = I('curNewsIndex');
        }

        $curKeyWord = $result[$newsIndex]['keyword'];

        $curNews = $newsresp->where("keyword='" . $curKeyWord . "'")->order('sort')->select();

        $this->curNews = $curNews;

        $this->keyword = $curKeyWord;

        $this->curNewsIndex = $newsIndex;

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

    public function setNewResp(){
        //数据合法性检查
        if(I('keyword') == null | I('keyword') == ''){
            $this->error('关键词不能为空');
        }
        if(I('title') == null | I('title') == ''){
            $this->error('标题不能为空');
        }
        if(I('description') == null | I('description') == ''){
            $this->error('简介不能为空');
        }
        if(I('url') == null | I('url') == ''){
            $this->error('跳转地址不能为空');
        }

        import('ORG.Net.UploadFile');
        $upload = new UploadFile();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath =  './wxportal/Uploads/images/';// 设置附件上传目录

        $upload->thumb = true;
        $upload->thumbMaxWidth = 150;
        $upload->thumbMaxHeight = 100;
        $upload->thumbPath = './wxportal/Uploads/images/';
        if(!$upload->upload()) {// 上传错误提示错误信息
            $this->error("图片文件有误！");
        }else{// 上传成功 获取上传文件信息
            $info =  $upload->getUploadFileInfo();
        }

        $newsresp = M('newsresp');
        $condition['keyword'] = I('keyword');
        $newsresp->where($condition)->delete();

        $data['keyword'] = I('keyword');
        $data['wxaccountid'] = I('wxaccountid');
        $data['title'] = I('title');
        $data['description'] = I('description');
        $data['url'] = I('url');
        $data['sort'] = -1;
        $data['picurl'] = '/wxportal/Uploads/images/' . $info[0]['savename'];
        $data['thumbpicurl'] = '/wxportal/Uploads/images/thumb_' . $info[0]['savename'];

        $result = $newsresp->add($data);
        if($result > 0){
            $this->success('增加成功！');
        }else{
            $this->error("增加单内容回复失败！");
        }

    }

    public function delNewResp(){
        $newsresp = M('newsresp');
        $newsresp->where('id=' . I('newRespId'))->delete();
        $this->success('删除成功！');
    }

    public function setNewsResp(){
        //数据合法性检查
        if(I('keyword') == null | I('keyword') == ''){
            $this->error('关键词不能为空');
        }
        if(I('title1') == null | I('title1') == ''){
            $this->error('标题1不能为空');
        }
        if(I('description1') == null | I('description1') == ''){
            $this->error('简介1不能为空');
        }
        if(I('url1') == null | I('url1') == ''){
            $this->error('跳转地址1不能为空');
        }

        if(I('title2') == null | I('title2') == ''){
            $this->error('标题2不能为空');
        }
        if(I('description2') == null | I('description2') == ''){
            $this->error('简介2不能为空');
        }
        if(I('url2') == null | I('url2') == ''){
            $this->error('跳转地址2不能为空');
        }

        if(I('title3') == null | I('title3') == ''){
            $this->error('标题3不能为空');
        }
        if(I('description3') == null | I('description3') == ''){
            $this->error('简介3不能为空');
        }
        if(I('url3') == null | I('url3') == ''){
            $this->error('跳转地址3不能为空');
        }

        if(I('title4') == null | I('title4') == ''){
            $this->error('标题4不能为空');
        }
        if(I('description4') == null | I('description4') == ''){
            $this->error('简介4不能为空');
        }
        if(I('url4') == null | I('url4') == ''){
            $this->error('跳转地址4不能为空');
        }

        import('ORG.Net.UploadFile');
        $upload = new UploadFile();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath =  './wxportal/Uploads/images/';// 设置附件上传目录

        $upload->thumb = true;
        $upload->thumbMaxWidth = 150;
        $upload->thumbMaxHeight = 100;
        $upload->thumbPath = './wxportal/Uploads/images/';
        if(!$upload->upload()) {// 上传错误提示错误信息
            $this->error("图片文件有误！");
        }else{// 上传成功 获取上传文件信息
            $info =  $upload->getUploadFileInfo();
        }

        $newsresp = M('newsresp');
        $condition['keyword'] = I('keyword');
        $newsresp->where($condition)->delete();

        $data['keyword'] = I('keyword');
        $data['wxaccountid'] = I('wxaccountid');

        for($i = 1 ; $i < 5; $i++){
            $data['title'] = I('title' . $i);
            $data['description'] = I('description' . $i);
            $data['url'] = I('url' . $i);
            $data['sort'] =  $i;
            $data['picurl'] = '/wxportal/Uploads/images/' . $info[$i - 1]['savename'];
            $data['thumbpicurl'] = '/wxportal/Uploads/images/thumb_' . $info[$i - 1]['savename'];
            $result = $newsresp->add($data);
        }
        if($result > 0){
            $this->success('增加成功！');
        }else{
            $this->error("增加多内容回复失败！");
        }
    }

    public function delNewsResp(){
        $newsresp = M('newsresp');
        $condition['keyword'] = I('keyword');
        $result = $newsresp->where($condition)->delete();
        if($result != false){
            $this->success('删除成功！');
        }else{
            $this->error("删除失败！");
        }
    }

    public function editNewsResp(){
        $this->gl = 'current';
        setLoginTips($this);
        $this->zdyfztuhf = blue;

        getWxAccount($this);

        $newsresp = M('newsresp');
        $result = $newsresp->where("keyword = '" . I('keyword') . "'")->order('sort')->select();
        $this->curNews = $result;
        $this->keyword = I('keyword');
        $this->display('editNewsResp');
        p($result);
    }

    public function doEditNewsResp(){
        //数据合法性检查
        if(I('keyword') == null | I('keyword') == ''){
            $this->error('关键词不能为空');
        }
        if(I('title1') == null | I('title1') == ''){
            $this->error('标题1不能为空');
        }
        if(I('description1') == null | I('description1') == ''){
            $this->error('简介1不能为空');
        }
        if(I('url1') == null | I('url1') == ''){
            $this->error('跳转地址1不能为空');
        }

        if(I('title2') == null | I('title2') == ''){
            $this->error('标题2不能为空');
        }
        if(I('description2') == null | I('description2') == ''){
            $this->error('简介2不能为空');
        }
        if(I('url2') == null | I('url2') == ''){
            $this->error('跳转地址2不能为空');
        }

        if(I('title3') == null | I('title3') == ''){
            $this->error('标题3不能为空');
        }
        if(I('description3') == null | I('description3') == ''){
            $this->error('简介3不能为空');
        }
        if(I('url3') == null | I('url3') == ''){
            $this->error('跳转地址3不能为空');
        }

        if(I('title4') == null | I('title4') == ''){
            $this->error('标题4不能为空');
        }
        if(I('description4') == null | I('description4') == ''){
            $this->error('简介4不能为空');
        }
        if(I('url4') == null | I('url4') == ''){
            $this->error('跳转地址4不能为空');
        }

        import('ORG.Net.UploadFile');
        $upload = new UploadFile();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath =  './wxportal/Uploads/images/';// 设置附件上传目录

        $upload->thumb = true;
        $upload->thumbMaxWidth = 150;
        $upload->thumbMaxHeight = 100;
        $upload->thumbPath = './wxportal/Uploads/images/';
        if(!$upload->upload()) {// 上传错误提示错误信息
            $this->error("图片文件有误！");
        }else{// 上传成功 获取上传文件信息
            $info =  $upload->getUploadFileInfo();
        }

        $newsresp = M('newsresp');
        $condition['keyword'] = I('keyword');
        $newsresp->where($condition)->delete();

        $data['keyword'] = I('keyword');
        $data['wxaccountid'] = I('wxaccountid');

        for($i = 1 ; $i < 5; $i++){
            $data['title'] = I('title' . $i);
            $data['description'] = I('description' . $i);
            $data['url'] = I('url' . $i);
            $data['sort'] =  $i;
            $data['picurl'] = '/wxportal/Uploads/images/' . $info[$i - 1]['savename'];
            $data['thumbpicurl'] = '/wxportal/Uploads/images/thumb_' . $info[$i - 1]['savename'];
            $result = $newsresp->add($data);
        }
        if($result > 0){
            $this->success('修改成功！');
        }else{
            $this->error("修改多内容回复失败！");
        }
    }
}
