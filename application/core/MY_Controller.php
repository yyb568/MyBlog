<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 控制器基类
 * add by zhixiao476@gmail.com
 * 2015年12月10日11:33:26
 */
if (ENVIRONMENT != 'product'){
	ini_set('memory_limit', '256M');
}
include_once "wxBizMsgCrypt.php";
class MY_Controller extends CI_Controller{
	// protected $APPSECRET = '02211677d75de2aae108644b815d8761';
	// 第三方发送消息给公众平台
	protected $encodingAesKey = "fYPvWtvbggLtKqeMUtDSZnuHYY9IIdA1eFeyvvbGLkg";
	protected $token = "yinyibin";
	protected $timeStamp = time();
	protected $nonce = "fhe080df9df4df";
	protected $appId = "wx7a01285bc391466a";
	protected $text = "<xml><ToUserName><![CDATA[oia2Tj我是中文jewbmiOUlr6X-1crbLOvLw]]></ToUserName><FromUserName><![CDATA[gh_7f083739789a]]></FromUserName><CreateTime>1407743423</CreateTime><MsgType><![CDATA[video]]></MsgType><Video><MediaId><![CDATA[eYJ1MbwPRJtOvIEabaxHs7TX2D-HV71s79GUxqdUkjm6Gs2Ed1KF3ulAOA9H1xG0]]></MediaId><Title><![CDATA[testCallBackReplyVideo]]></Title><Description><![CDATA[testCallBackReplyVideo]]></Description></Video></xml>";

	/**
	 * 初始化操作
	 * add by zhixiao476@gmail.com
	 * 2015年12月10日11:34:15
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getWeXinState(){
		$pc = new WXBizMsgCrypt($this->token, $this->encodingAesKey, $this->appId);
		$encryptMsg = '';
		$errCode = $pc->encryptMsg($this->text, $this->timeStamp, $this->nonce, $this->encryptMsg);
		if ($errCode == 0) {
		print("加密后: " . $encryptMsg . "\n");
		} else {
		print($errCode . "\n");
		}

		$xml_tree = new DOMDocument();
		$xml_tree->loadXML($this->encryptMsg);
		$array_e = $xml_tree->getElementsByTagName('Encrypt');
		$array_s = $xml_tree->getElementsByTagName('MsgSignature');
		$encrypt = $array_e->item(0)->nodeValue;
		$msg_sign = $array_s->item(0)->nodeValue;

		$format = "<xml><ToUserName><![CDATA[toUser]]></ToUserName><Encrypt><![CDATA[%s]]></Encrypt></xml>";
		$from_xml = sprintf($format, $encrypt);

		// 第三方收到公众号平台发送的消息
		$msg = '';
		$errCode = $pc->decryptMsg($msg_sign, $timeStamp, $this->nonce, $from_xml, $msg);
		if ($errCode == 0) {
			print("解密后: " . $msg . "\n");
		} else {
			print($errCode . "\n");
		}
	}
	
}