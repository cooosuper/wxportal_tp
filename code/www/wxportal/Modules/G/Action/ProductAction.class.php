<?php
// 本类由系统自动生成，仅供测试用途
class ProductAction extends Action {
    public function index(){
        $gproduct = M('gproduct');
        $condition['wxaccountid'] = I('wxaccountid');
        $results = $gproduct->where($condition)->select();
        $this->gproducts = $results;
        $this->wxaccountid = I('wxaccountid');
        $this->display();
    }
    
    public function productInfo(){
        $wxaccountid = I('wxaccountid');
        $gProductId = I('gProductId');
        $gproduct = M('gproduct');
        $condition['wxaccountid'] = $wxaccountid;
        $condition['id'] = $gProductId;
        $results = $gproduct->where($condition)->select();
        $this->gproducts = $results;
        $this->display("productInfo");
    }
    
    public function recommandProducts(){
        $gproduct = M('gproduct');
        $condition['wxaccountid'] = I('wxaccountid');
        $condition['isrecommand'] = 1;
        $results = $gproduct->where($condition)->select();
        $this->gproducts = $results;
        $this->wxaccountid = I('wxaccountid');
        $this->display("recommandProducts");
    }
}