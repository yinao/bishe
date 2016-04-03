<?php
/**
* 
*/
require_once('BaseAction.class.php');
class IndexAction extends BaseAction{
	public function run(){
		//echo 'this is index';
		$this->obj->caching=false;
		$this->obj->assign('title','首页title');
		$this->obj->assign('keyword','关键字');
		$this->obj->assign('description','网站页面内容描述');
		$this->obj->assign('content','这是首页显示');
		$this->obj->display('index.html');
	}
}