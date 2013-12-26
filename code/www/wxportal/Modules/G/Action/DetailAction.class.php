<?php
// 本类由系统自动生成，仅供测试用途
class DetailAction extends Action {
    public function index(){
        $gdetail = M('gdetail');
        $condition['wxaccountid'] = I('wxaccountid');
        $results = $gdetail->where($condition)->order('sort')->select();
        $this->gdetails = $results;
        $this->display();
    }
}