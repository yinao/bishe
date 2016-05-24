<?php

require_once('BaseAction.class.php');
require DIR.'/Web/Model/UserModel.class.php';
///require DIR.'/Web/Model/IndexModel.class.php';
class UserAction extends BaseAction{
	public function run(){
		if(!$this->checkIsLogin()){
			$this->showLoginPage();return;
		}
		if(!$this->adminInfo['admin_role']){
			$this->redirect('a=st');exit();
		}
		$this->obj->assign('userActive',' class="active"');
		$this->obj->assign('url',$this->url);
		$this->obj->assign('rootUrl',$this->rootUrl);
		
		$this->getParameters();
		
		$para = isset($this->parameters['safe']['e'])?$this->parameters['safe']['e']:NULL;
		
		switch ($para){
			case 'd':
				$this->del();
				break;
			default:
				$this->index();
				break;
		}
	}
	
	private function index(){
		
		$this->obj->assign('title','会员管理--预防接种系统后台管理');

		if(!isset($this->parameters['safe']['p'])||empty($this->parameters['safe']['p'])){
			$this->parameters['safe']['p']=1;
		}else{
			if(!is_numeric($this->parameters['safe']['p'])){
				$this->parameters['safe']['p']=1;
			}
		}
		if(!isset($this->parameters['safe']['d'])||empty($this->parameters['safe']['d'])){
			$this->parameters['safe']['d']=0;
		}else{
			if($this->parameters['safe']['d']!=0&&$this->parameters['safe']['d']!=1){
				$this->parameters['safe']['d']=0;
			}
		}
		if($this->parameters['safe']['d']==1){
			$this->obj->assign('tog',array('0','正常用户'));
		}else{
			$this->obj->assign('tog',array('1','回收站'));
		}
		
		
		require DIR.'/Web/Common/Page.class.php';
		$page=new Page(UserModel::rowCount($this->parameters['safe']['d']), $this->url,$this->parameters['safe']['p']);
		
		$res=UserModel::fetchAll(array($this->parameters['safe'],$page->getCondition()));
		
		$this->obj->assign('pager',$page->setPage());
		$this->obj->assign('list',$res);
		unset($page);
		
		$this->obj->display('user_index.html');
	}

	private function del(){
		$res=array('status'=>0,'res'=>0);
		if($this->isAjax()){
			if(isset($_POST['tog'])&&!empty($_POST['tog'])){
				$r=UserModel::userAction($_POST);
				if($r){$res['status']=1;$res['res']=1;}
				else{
					$res['status']=0;
				}
			}
		}
		echo json_encode($res);exit();
	}
}