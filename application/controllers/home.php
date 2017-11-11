<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 首页
 * add by yyb5683@gmail.com
 * 2017年6月12日16:31:04
 */
header('Content-type:text');
define("TOKEN", "yinyibin");
class Home extends MY_Controller {

	/**
	 * 初始化
	 * add by yyb5683@gmail.com
	 * 2017年6月12日16:32:00
	 */
	public function __construct(){
		parent::__construct();
		// $wxConfig = $this->getWxJsConfig();
	}
	
	public function index(){

		if (!isset($_GET['echostr'])) {
			$this->responseMsg();
		}else{
	    	$this->valid();
		}
	}

	public function valid()
    {
        $echoStr = $_GET["echostr"];
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }

    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);

        if($tmpStr == $signature){
            return true;
        }else{
            return false;
        }
    }

    // public function responseMsg()
    // {
    //     $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
    //     if (!empty($postStr)){
    //         $this->logger("R ".$postStr);
    //         $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
    //         $RX_TYPE = trim($postObj->MsgType);

    //         switch ($RX_TYPE)
    //         {
    //             case "event":
    //                 $result = $this->receiveEvent($postObj);
    //                 break;
    //             case "text":
    //                 $result = $this->receiveText($postObj);
    //                 break;
    //         }
    //         $this->logger("T ".$result);
    //         echo $result;
    //     }else {
    //         echo "";
    //         exit;
    //     }
    // }
        public function responseMsg()
    {
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        if (!empty($postStr)){
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $keyword = trim($postObj->Content);
            $time = time();
            $textTpl = "<xml>
                        <ToUserName><![CDATA[%s]]></ToUserName>
                        <FromUserName><![CDATA[%s]]></FromUserName>
                        <CreateTime>%s</CreateTime>
                        <MsgType><![CDATA[%s]]></MsgType>
                        <Content><![CDATA[%s]]></Content>
                        <FuncFlag>0</FuncFlag>
                        </xml>";
            if($keyword == "?" || $keyword == "？")
            {
                $msgType = "text";
                $contentStr = date("Y-m-d H:i:s",time());
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;
            }
        }else{
            echo "";
            exit;
        }
    }
    
    private function receiveEvent($object)
    {
        $content = "";
        switch ($object->Event)
        {
            case "subscribe":
                $content = "欢迎关注方倍工作室";
                break;
            case "unsubscribe":
                $content = "取消关注";
                break;
        }
        $result = $this->transmitText($object, $content);
        return $result;
    }
    
    //接收文本消息
    private function receiveText($object)
    {
        $keyword = trim($object->Content);
        $content = date("Y-m-d H:i:s",time())."\n技术支持 方倍工作室";
        
        if(is_array($content)){
            if (isset($content[0]['PicUrl'])){
                $result = $this->transmitNews($object, $content);
            }else if (isset($content['MusicUrl'])){
                $result = $this->transmitMusic($object, $content);
            }
        }else{
            $result = $this->transmitText($object, $content);
        }

        return $result;
    }

    
    private function transmitText($object, $content)
    {
        $textTpl = "<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[text]]></MsgType>
<Content><![CDATA[%s]]></Content>
</xml>";
        $result = sprintf($textTpl, $object->FromUserName, $object->ToUserName, time(), $content);
        return $result;
    }

    private function transmitNews($object, $arr_item)
    {
        if(!is_array($arr_item))
            return;

        $itemTpl = "    <item>
        <Title><![CDATA[%s]]></Title>
        <Description><![CDATA[%s]]></Description>
        <PicUrl><![CDATA[%s]]></PicUrl>
        <Url><![CDATA[%s]]></Url>
    </item>
";
        $item_str = "";
        foreach ($arr_item as $item)
            $item_str .= sprintf($itemTpl, $item['Title'], $item['Description'], $item['PicUrl'], $item['Url']);

        $newsTpl = "<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[news]]></MsgType>
<Content><![CDATA[]]></Content>
<ArticleCount>%s</ArticleCount>
<Articles>
$item_str</Articles>
</xml>";

        $result = sprintf($newsTpl, $object->FromUserName, $object->ToUserName, time(), count($arr_item));
        return $result;
    }

    private function transmitMusic($object, $musicArray)
    {
        $itemTpl = "<Music>
    <Title><![CDATA[%s]]></Title>
    <Description><![CDATA[%s]]></Description>
    <MusicUrl><![CDATA[%s]]></MusicUrl>
    <HQMusicUrl><![CDATA[%s]]></HQMusicUrl>
</Music>";

        $item_str = sprintf($itemTpl, $musicArray['Title'], $musicArray['Description'], $musicArray['MusicUrl'], $musicArray['HQMusicUrl']);

        $textTpl = "<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[music]]></MsgType>
$item_str
</xml>";

        $result = sprintf($textTpl, $object->FromUserName, $object->ToUserName, time());
        return $result;
    }
    
    private function logger($log_content)
    {
        if(isset($_SERVER['HTTP_APPNAME'])){   //SAE
            sae_set_display_errors(false);
            sae_debug($log_content);
            sae_set_display_errors(true);
        }else if($_SERVER['REMOTE_ADDR'] != "127.0.0.1"){ //LOCAL
            $max_size = 10000;
            $log_filename = "log.xml";
            if(file_exists($log_filename) and (abs(filesize($log_filename)) > $max_size)){unlink($log_filename);}
            file_put_contents($log_filename, date('H:i:s')." ".$log_content."\r\n", FILE_APPEND);
        }
    }

	// public function index(){
		
	// 	// $this->valid();
	// 	// $this->load->view('home/index');

	// 	if (!isset($_GET['echostr'])) {
	// 		$this->responseMsg();
	// 	}else{
	// 		//初次接入验证
 //    		$this->valid();
	// 	}
	// }

	/**
	 * 首次接入验证
	 * add by  yyb5683@gmail.com
	 * 2017年6月14日09:13:51
	 */
	// public function valid(){
	// 	$echoStr = $_GET["echostr"];
	
	// 	//valid signature , option
	// 	if($this->checkSignature()){
	// 		echo $echoStr;
	// 		exit;
	// 	}
	// }


	/**
	 * 首次接入验证
	 * add by  yyb5683@gmail.com
	 * 2017年6月14日09:13:51
	 */
	// private function checkSignature(){
	// 	$signature = $_GET["signature"];
	// 	$timestamp = $_GET["timestamp"];
	// 	$nonce = $_GET["nonce"];
	
	// 	$token = TOKEN;
	// 	$tmpArr = array($token, $timestamp, $nonce);
	// 	sort($tmpArr);
	// 	$tmpStr = implode( $tmpArr );
	// 	$tmpStr = sha1( $tmpStr );
	
	// 	if( $tmpStr == $signature ){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }
}

