<?php
/**
*系统模块
*/
require_once('BaseAction.class.php');
class SystemAction extends BaseAction{
	public function run(){
		$this->getParameters();//获取地址栏参数
		$para = isset($this->parameters['safe']['e'])?$this->parameters['safe']['e']:NULL;
		switch ($para) {
			default:
				$this->index();
				break;
		}
	}

	/**
	* 此模块下的主页面
	*/
	private function index(){

		$this->obj->assign('bread',$this->bread(1,'系统'));
		$this->obj->assign('url',$this->url);
		$this->obj->assign('rootUrl',$this->rootUrl);
		$this->obj->assign('sysActive',' class="active"');
		$this->obj->display('system.html');
	}

}