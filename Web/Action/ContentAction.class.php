<?php

require_once('BaseAction.class.php');
class ContentAction extends BaseAction{
	public function run(){
		//echo 'this is content';
		$this->getParameters();//获取地址栏参数
		$para = isset($this->parameters['safe']['e'])?$this->parameters['safe']['e']:NULL;
		switch ($para) {
			case 'e':
				$this->edit();
				break;
			case 'a':
				$this->add();
				break;
			default:
				$this->index();
				break;
		}
	}

	private function index(){
		$this->obj->caching=false;
		$this->obj->assign('title','内容页title');
		$this->obj->assign('keyword','关键字');
		$this->obj->assign('description','网站页面内容描述');
		$this->obj->assign('content','这是首页显示');
		$this->obj->assign('url',$this->url);
		$this->obj->assign('rootUrl',$this->rootUrl);
		$this->obj->display('content.html');
	}

	private function edit(){
		$this->obj->caching=false;
		$this->obj->assign('title','内容编辑页title');
		$this->obj->assign('keyword','关键字');
		$this->obj->assign('description','网站页面内容描述');
		$this->obj->assign('content','这是首页显示');
		$this->obj->assign('rootUrl',$this->rootUrl);
		$this->obj->assign('url',$this->getUrl);
		$this->obj->display('content_edit.html');
	}

	private function add(){
		echo 'this is add contetn';
	}
}