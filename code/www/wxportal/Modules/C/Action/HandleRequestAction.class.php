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
        $wxaccountid = $wxaccounts[0]['id'];

        if('text' == $data['MsgType']){
            // 将用户发送过来的内容作为关键字，依次在newsresp、mediaresp、textresp中遍历，优先级为：newsresp、mediaresp、textresp
            $keyword = $data['Content'];

            // 首先在图文表中搜索
            $newsresp = M('newsresp');
            $condition['wxaccountid'] = $wxaccountid;
            $condition['keyword'] = $keyword;
            $newsResults = $newsresp->where($condition)->order('id')->getField('id,title,description,picurl,url');
            if(count($newsResults) > 0){
                //组合图文数据
                $reply = array($newsResults, 'news');
            }else{
                //若图newsresp搜索结果为空，则在mediaresp表中搜索,目前存在必传的ThumbMediaId，不好操作，暂不做
                //                $mediaresp = M('mediaresp');
                //                $condition['wxaccountid'] = $wxaccountid;
                //                $condition['keyword'] = $keyword;
                //                $mediaResults = $mediaresp->where($condition)->select();

                //直接在textresp中查找
                $textresp = M('textresp');
                $condition['wxaccountid'] = $wxaccountid;
                $condition['keyword'] = $keyword;
                $textresps = $textresp->where($condition)->select();
                if(count($textresps)>0){
                    $reply = array($textresps[0]['content'], 'text');
                }else{
                    $condition['wxaccountid'] = $wxaccountid;
                    $condition['keyword'] = 'unknown';
                    $textresps = $textresp->where($condition)->select();
                    $reply = array($textresps[0]['content'], 'text');
                }
            }
        } elseif('event' == $data['MsgType'] && 'subscribe' == $data['Event']){
            $textresp = M('textresp');
            $condition['wxaccountid'] = $wxaccountid;
            $condition['keyword'] = 'watched';
            $textresps = $textresp->where($condition)->select();
            $reply = array($textresps[0]['content'], 'text');
        } else {
            exit;
        }
        return $reply;
    }

    public function test(){
        $orgid = "gh_b071e7a65633";
        $data['MsgType'] = "text";
        $data['Content'] = "3G";
        $wxaccount = M('wxaccount');
        $condition['orgid'] = $orgid;
        $wxaccounts = $wxaccount->where($condition)->select();
        $wxaccountid = $wxaccounts[0]['id'];

        if('text' == $data['MsgType']){
            // 将用户发送过来的内容作为关键字，依次在newsresp、mediaresp、textresp中遍历，优先级为：newsresp、mediaresp、textresp
            $keyword = $data['Content'];

            // 首先在图文表中搜索
            $newsresp = M('newsresp');
            $condition['wxaccountid'] = $wxaccountid;
            $condition['keyword'] = $keyword;
            $newsResults = $newsresp->where($condition)->order('id')->getField('id,title,description,picurl,url');
            $this->news($newsResults);
            if(count($newsResults) > 0){
                //组合图文数据
                $reply = array($newsResults, 'news');
            }else{
                //若图newsresp搜索结果为空，则在mediaresp表中搜索,目前存在必传的ThumbMediaId，不好操作，暂不做
                //                $mediaresp = M('mediaresp');
                //                $condition['wxaccountid'] = $wxaccountid;
                //                $condition['keyword'] = $keyword;
                //                $mediaResults = $mediaresp->where($condition)->select();

                //直接在textresp中查找
                $textresp = M('textresp');
                $condition['wxaccountid'] = $wxaccountid;
                $condition['keyword'] = $keyword;
                $textresps = $textresp->where($condition)->select();
                if(count($textresps)>0){
                    $reply = array($textresps[0]['content'], 'text');
                }else{
                    $condition['wxaccountid'] = $wxaccountid;
                    $condition['keyword'] = 'unknown';
                    $textresps = $textresp->where($condition)->select();
                    $reply = array($textresps[0]['content'], 'text');
                }
            }
        } elseif('event' == $data['MsgType'] && 'subscribe' == $data['Event']){
            $textresp = M('textresp');
            $condition['wxaccountid'] = $wxaccountid;
            $condition['keyword'] = 'watched';
            $textresps = $textresp->where($condition)->select();
            $reply = array($textresps[0]['content'], 'text');
        } else {
            exit;
        }
        return $reply;

    }

    private function news($news){
        $articles = array();
        foreach ($news as $key =>$value){
            $articles[$key]['Title'] = $news[$key]['title'];
            $articles[$key]['Description'] = $news[$key]['description'];
            $articles[$key]['PicUrl'] = "http://www.chwlgo.com/" . $news[$key]['picurl'];
            echo $articles[$key]['PicUrl'] . "<br>";
            $articles[$key]['Url'] = $news[$key]['url'];
            echo $articles[$key]['Url'] . "<br>";
        }
        $this->data['ArticleCount'] = count($articles);
        $this->data['Articles'] = $articles;

        //		$articles = array();
        //		foreach ($news as $key => $value) {
        //			list(
        //			    ,
        //				$articles[$key]['Title'],
        //				$articles[$key]['Description'],
        //				$articles[$key]['PicUrl'],
        //				$articles[$key]['Url']
        //			) = $value;
        ////			if($key >= 9) { break; } //最多只允许10调新闻
        //		}
        //		$this->data['ArticleCount'] = count($articles);
        //		$this->data['Articles'] = $articles;
    }
}
