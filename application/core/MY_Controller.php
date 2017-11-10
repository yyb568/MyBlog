<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 控制器基类
 * add by zhixiao476@gmail.com
 * 2015年12月10日11:33:26
 */
if (ENVIRONMENT != 'product'){
	ini_set('memory_limit', '256M');
}
class MY_Controller extends CI_Controller{
	
	/**
	 * 初始化操作
	 * add by zhixiao476@gmail.com
	 * 2015年12月10日11:34:15
	 */
	public function __construct(){
		parent::__construct();
	}
	
}