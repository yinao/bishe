<?php
/**
* 
*/
require_once('BaseAction.class.php');
class IndexAction extends BaseAction{
	public function run(){
		//echo 'this is index';
		$this->obj->caching=false;
		$this->obj->assign('title','this is title');
		$this->obj->assign('keyword','');
		$this->obj->assign('description','');
		$this->obj->assign('content','这是首页显示');
		$this->obj->display('index.html');
	}
}