<?php
/**
*系统模块
*/
require_once('BaseAction.class.php');
require_once(DIR.'/Web/Model/SystemModel.class.php');
//require DIR.'/Web/Model/IndexModel.class.php';
class SystemAction extends BaseAction{
	public function run(){
		if(!$this->checkIsLogin()){
			$this->showLoginPage();return;
		}
		$this->getParameters();//获取地址栏参数
		$para = isset($this->parameters['safe']['e'])?$this->parameters['safe']['e']:NULL;
		switch ($para) {
			case 'p':
				$this->power();
				break;
			case 'pa':
				$this->pAction();
				break;
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
		$this->obj->assign('sActive',' class="active"');
		$this->obj->display('system_index.html');
	}

	private function power(){
		$this->obj->assign('bread',$this->bread(2,'系统','s','管理员设置'));
		$this->obj->assign('url',$this->url);
		$this->obj->assign('rootUrl',$this->rootUrl);
		$this->obj->assign('sysActive',' class="active"');
		$this->obj->assign('pActive',' class="active"');
		$this->parameters['safe']['parent']=$this->adminInfo['admin_parent']==0?$this->adminInfo['id']:$this->adminInfo['admin_parent'];
		$this->obj->assign('mList',SystemModel::fetchMan($this->parameters['safe']));
		
		$this->obj->display('system_power.html');
	}

	private function pAction(){
		$res['status']=0;
		$res['res']=0;
		if($this->isAjax()){
			if(isset($_POST)&&!empty($_POST['act'])){
				$r=SystemModel::systemAction($_POST,$this->adminInfo);
				if($r){
					$res['status']=1;
					$res['res']=1;
				}
			}else{
				$res['status']=0;
			}
		}
		echo json_encode($res);exit();
	}
}