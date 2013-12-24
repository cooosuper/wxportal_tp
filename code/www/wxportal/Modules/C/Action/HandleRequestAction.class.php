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
        if('text' == $data['MsgType']){
            $data['Content'] = $data['ToUserName'];
            $reply = array($data['Content'], 'text');
        } elseif('event' == $data['MsgType'] && 'subscribe' == $data['Event']){
            $reply = array('欢迎关注Cooosuper！', 'text');
        } else {
            exit;
        }
        return $reply;
    }
}
