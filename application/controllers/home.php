<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 首页
 * add by yyb5683@gmail.com
 * 2017年6月12日16:31:04
 */
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
		
		// $this->valid();
		// $this->load->view('home/index');

		if (!isset($_GET['echostr'])) {
			$this->responseMsg();
		}else{
			//初次接入验证
    		$this->valid();
		}
	}

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

