<?php
// 本类由系统自动生成，仅供测试用途
class HandleRequestAction extends Action {
    public function getRequestData(){
        import('@.Util.ThinkWechat');
        $weixin = new ThinkWechat($_GET["token"]);

        /* 获取请求信息 */
        $data = $weixin->request();

        /* 获取回复信息 */
        // 这里的回复信息是通过判断请求内容自行定制的， 不在 SDK范围内，请自行完成
        list($content, $type) = $this->reply($data);

        /* 响应当前请求 */
        $weixin->response($content, $type);
    }

    private function reply($data){
        $orgid = $data['ToUserName'];
        $wxaccount = M('wxaccount');
        $condition['orgid'] = $orgid;
        $wxaccounts = $wxaccount->where($condition)->select();
        $wxaccount = $wxaccounts[0]['id'];

        if('text' == $data['MsgType']){
            $data['Content'] = $data['ToUserName'];
            $reply = array($data['Content'], 'text');
        } elseif('event' == $data['MsgType'] && 'subscribe' == $data['Event']){
            $textresp = M('textresp');
            $condition['wxaccountid'] = $wxaccount;
            $condition['keyword'] = 'watched';
            $textresps = $textresp->where($condition)->select();

            $reply = array($textresps[0]['content'], 'text');
        } else {
            exit;
        }
        return $reply;
    }

    public function test(){
        $orgid = 'gh_b071e7a65633';
        $wxaccount = M('wxaccount');
        $condition['orgid'] = $orgid;
        echo 'orgid='.$orgid.'<br>';
        $result = $wxaccount->where($condition)->select();
        echo $wxaccount->getLastSql().'<br>';
        p($result);

        $textresp = M('textresp');
        $condition['wxaccountid'] = $result[0]['id'];
        $condition['keyword'] = 'watched';
        $result = $textresp->where($condition)->select();
        echo $textresp->getLastSql();
        p($result);

        echo $result[0]['content'];
    }
}
