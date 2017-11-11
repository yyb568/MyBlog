<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 控制器基类
 * add by zhixiao476@gmail.com
 * 2015年12月10日11:33:26
 */
class MY_Controller extends CI_Controller{

	/**
	 * 初始化操作
	 * add by zhixiao476@gmail.com
	 * 2015年12月10日11:34:15
	 */
	public function __construct(){
		parent::__construct();
	}

	// public function valid(){
 //        $echoStr = $_GET["echostr"];
 //        if($this->checkSignature()){
 //            echo $echoStr;
 //            exit;
 //        }
 //    }

 //    private function checkSignature(){
 //        $signature = $_GET["signature"];
 //        $timestamp = $_GET["timestamp"];
 //        $nonce = $_GET["nonce"];
 //        $token = TOKEN;
 //        $tmpArr = array($token, $timestamp, $nonce);
 //        sort($tmpArr);
 //        $tmpStr = implode($tmpArr);
 //        $tmpStr = sha1($tmpStr);

 //        if($tmpStr == $signature){
 //            return true;
 //        }else{
 //            return false;
 //        }
 //    }

 //    public function responseMsg(){
 //        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
 //        if (!empty($postStr)){
 //            $this->logger("R ".$postStr);
 //            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
 //            $RX_TYPE = trim($postObj->MsgType);

 //            switch ($RX_TYPE)
 //            {
 //                case "event":
 //                    $result = $this->receiveEvent($postObj);
 //                    break;
 //                case "text":
 //                    $result = $this->receiveText($postObj);
 //                    break;
 //            }
 //            $this->logger("T ".$result);
 //            echo $result;
 //        }else {
 //            echo "";
 //            exit;
 //        }
 //    }
    
 //    private function receiveEvent($object){
 //        $content = "";
 //        switch ($object->Event)
 //        {
 //            case "subscribe":
 //                $content = "欢迎尹义斌的微信公众账号";
 //                break;
 //            case "unsubscribe":
 //                $content = "取消关注";
 //                break;
 //        }
 //        $result = $this->transmitText($object, $content);
 //        return $result;
 //    }
    
 //    //接收文本消息
 //    private function receiveText($object){
 //        $keyword = trim($object->Content);
 //        // $content = date("Y-m-d H:i:s",time())."\n技术支持 尹义斌";
 //        $URL = "http://api.taokezhushou.com/api/v1/search?app_key=7c7b0a07f0973598&q=".$keyword;
 //        $contents = $this->getCurl($URL);
 //        $content = $contents['data'][0]['goods_title'];
 //        print_r($content);die;
 //        if(is_array($content)){
 //            if (isset($content[0]['PicUrl'])){
 //                $result = $this->transmitNews($object, $content);
 //            }else if (isset($content['MusicUrl'])){
 //                $result = $this->transmitMusic($object, $content);
 //            }
 //        }else{
 //            $result = $this->transmitText($object, $content);
 //        }

 //        return $result;
 //    }

    
 //    private function transmitText($object, $content){
 //        $textTpl = "<xml>
	// 			<ToUserName><![CDATA[%s]]></ToUserName>
	// 			<FromUserName><![CDATA[%s]]></FromUserName>
	// 			<CreateTime>%s</CreateTime>
	// 			<MsgType><![CDATA[text]]></MsgType>
	// 			<Content><![CDATA[%s]]></Content>
	// 			</xml>";
 //        $result = sprintf($textTpl, $object->FromUserName, $object->ToUserName, time(), $content);
 //        return $result;
 //    }

 //    private function transmitNews($object, $arr_item){
 //        if(!is_array($arr_item))
 //            return;

 //        $itemTpl = "<item>
	// 	        <Title><![CDATA[%s]]></Title>
	// 	        <Description><![CDATA[%s]]></Description>
	// 	        <PicUrl><![CDATA[%s]]></PicUrl>
	// 	        <Url><![CDATA[%s]]></Url>
 //    			</item>";
 //        $item_str = "";
 //        foreach ($arr_item as $item)
 //            $item_str .= sprintf($itemTpl, $item['Title'], $item['Description'], $item['PicUrl'], $item['Url']);

 //        $newsTpl = "<xml>
	// 			<ToUserName><![CDATA[%s]]></ToUserName>
	// 			<FromUserName><![CDATA[%s]]></FromUserName>
	// 			<CreateTime>%s</CreateTime>
	// 			<MsgType><![CDATA[news]]></MsgType>
	// 			<Content><![CDATA[]]></Content>
	// 			<ArticleCount>%s</ArticleCount>
	// 			<Articles>
	// 			$item_str</Articles>
	// 			</xml>";

 //        $result = sprintf($newsTpl, $object->FromUserName, $object->ToUserName, time(), count($arr_item));
 //        return $result;
 //    }

 //    private function transmitMusic($object, $musicArray){
 //        $itemTpl = "<Music>
	// 			    <Title><![CDATA[%s]]></Title>
	// 			    <Description><![CDATA[%s]]></Description>
	// 			    <MusicUrl><![CDATA[%s]]></MusicUrl>
	// 			    <HQMusicUrl><![CDATA[%s]]></HQMusicUrl>
	// 			   </Music>";

 //        $item_str = sprintf($itemTpl, $musicArray['Title'], $musicArray['Description'], $musicArray['MusicUrl'], $musicArray['HQMusicUrl']);

 //        $textTpl = "<xml>
	// 			<ToUserName><![CDATA[%s]]></ToUserName>
	// 			<FromUserName><![CDATA[%s]]></FromUserName>
	// 			<CreateTime>%s</CreateTime>
	// 			<MsgType><![CDATA[music]]></MsgType>
	// 			$item_str
	// 			</xml>";

 //        $result = sprintf($textTpl, $object->FromUserName, $object->ToUserName, time());
 //        return $result;
 //    }
    
 //    private function logger($log_content){
 //        if(isset($_SERVER['HTTP_APPNAME'])){   //SAE
 //            sae_set_display_errors(false);
 //            sae_debug($log_content);
 //            sae_set_display_errors(true);
 //        }else if($_SERVER['REMOTE_ADDR'] != "127.0.0.1"){ //LOCAL
 //            $max_size = 10000;
 //            $log_filename = "log.xml";
 //            if(file_exists($log_filename) and (abs(filesize($log_filename)) > $max_size)){unlink($log_filename);}
 //            file_put_contents($log_filename, date('H:i:s')." ".$log_content."\r\n", FILE_APPEND);
 //        }
 //    }


 //    private function getCurl($urls = ''){
 //    	// 1. 初始化
	// 	$ch = curl_init();
	// 	// 2. 设置选项，包括URL
	// 	curl_setopt($ch,CURLOPT_URL,$urls);
	// 	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	// 	curl_setopt($ch,CURLOPT_HEADER,0);
	// 	// 3. 执行并获取HTML文档内容
	// 	$output = curl_exec($ch);
	// 	if($output === FALSE ){
	// 	echo "CURL Error:".curl_error($ch);
	// 	}
		
	// 	// 4. 释放curl句柄
	// 	curl_close($ch);

	// 	print_r(json_decode($output,true));
 //    }
}