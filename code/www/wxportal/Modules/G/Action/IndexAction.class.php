<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        $gindex = M('gindex');
        $condition['wxaccountid'] = I('wxaccountid');
        $results = $gindex->where($condition)->select();
        
        if(count($results) > 0){
            $this->gindex = $results[0];
        }
        $this->wxaccountid = I('wxaccountid');
        $this->display();
    }
}
