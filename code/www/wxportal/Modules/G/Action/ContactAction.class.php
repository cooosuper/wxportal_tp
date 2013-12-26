<?php
// 本类由系统自动生成，仅供测试用途
class ContactAction extends Action {
    public function index(){
        $gcontact = M('gcontact');
        $condition['wxaccountid'] = I('wxaccountid');
        $results = $gcontact->where($condition)->select();
        $this->gcontacts = $results;
        $this->display();
    }
}