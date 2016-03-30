<?php
/**
* 
*/
require_once('BaseAction.class.php');
class IndexAction extends BaseAction{
	public function run(){
		//echo 'this is index';
		$this->assign('title','')；
		$this->obj->assign('content','这是首页显示');
		$this->obj->display('index.html');
	}
}