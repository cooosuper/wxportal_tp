<?php
function p($arr){
    echo '<pre>' . print_r($arr, true) . '<pre>';
}

function getWxAccount($object){
    $wxaccount = M('wxaccount');
    $result = $wxaccount->where('id=' . I('wxaccountid'))->select();
    $object->wxaccount = $result[0];
}

function setLoginTips($object){
    $object->group_name = GROUP_NAME;
    $object->loginTips = '欢迎您，' . $_SESSION['accountName'];
}
?>