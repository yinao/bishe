<?php
require 'BaseAction.class.php';
require DIR.'/Web/Model/StationModel.class.php';
//require DIR.'/Web/Model/IndexModel.class.php';
class StationAction extends BaseAction{
	public function run(){
		if(!$this->checkIsLogin()){
			$this->showLoginPage();return;
		}
		$this->getParameters();//获取地址栏参数
		$para = isset($this->parameters['safe']['e'])?$this->parameters['safe']['e']:NULL;
		
		$this->obj->assign('url',$this->url);
		$this->obj->assign('rootUrl',$this->rootUrl);
		$this->obj->assign('staActive',' class="active"');

		switch ($para) {
			case 'sd':
				$this->stationInfo();
				break;
			case 'sta':
				$this->stationAct();
				break;
			case 'vea':
				$this->veroAction();
				break;
			case 'vero':
				$this->veroList();
				break;
			case 'stReg':
				$this->stationRegisterInfo();
				break;
			default:
				if($this->adminInfo['admin_role']==1){
					$this->index();
				}else if($this->adminInfo['admin_role']==0){
					if($this->adminInfo['station_id']){
						$this->stationInfo();
					}else{
						$this->stationRegister();
					}
				}
				break;
		}
	}

	private function index(){
		$this->obj->assign('bread',$this->bread(1,'防疫站管理'));
		$this->obj->assign('smActive',' class="active"');

		if(!isset($this->parameters['safe']['p'])||empty($this->parameters['safe']['p'])||!is_numeric($this->parameters['safe']['p'])){
			$this->parameters['safe']['p']=1;
		}

		$result=StationModel::fetchAll($this->parameters['safe'],$this->url);

		$this->obj->assign('paras',$_GET);
		$this->obj->assign('pager',$result['page']);
		$this->obj->assign('stationList',$result['list']);

		$this->obj->display('station_index.html');
	}

	private function stationInfo(){
		$this->obj->assign('bread',$this->bread(2,'防疫站管理','st',防疫站详情));
		$this->obj->assign('sdActive',' class="active"');
		$this->obj->assign('paras',$_GET);

		if(!isset($this->parameters['safe']['p'])||empty($this->parameters['safe']['p'])||!is_numeric($this->parameters['safe']['p'])){
			$this->parameters['safe']['p']=1;
		}

		$this->parameters['safe']['station_id']=$this->adminInfo['station_id'];
		$this->parameters['safe']['role']=$this->adminInfo['admin_role'];
		//echo '<pre>';print_r(StationModel::fetchOne($this->parameters['safe']));exit();
		$this->obj->assign('stationInfo',StationModel::fetchOne($this->parameters['safe'],$this->url));

		$this->obj->display('station_info.html');
	}

	private function stationAct(){
		$res=array('status'=>0,'res'=>0);
		if($this->isAjax()){
			if(isset($_POST)&&!empty($_POST['tog'])){
				$res['status']=1;
				$res['res']=StationModel::action($_POST);
			}
		}
		echo json_encode($res);exit();
	}

	private function veroAction(){
		$res=array('status'=>0,'res'=>0);
		if($this->isAjax()){
			if(isset($_POST)&&!empty($_POST['tog'])){
				$res['status']=1;
				$res['res']=StationModel::veroAction($_POST,$this->adminInfo['station_id']);
			}
		}
		echo json_encode($res);exit();
	}

	private function veroList(){
		//$this->parameters['safe']['admin_role']=$this->adminInfo['admin_role'];
		//$this->parameters['safe']['station_id']=$this->adminInfo['station_id'];

		$this->obj->assign('bread',$this->bread(2,'防疫站信息管理','st',疫苗管理));
		$this->obj->assign('veroActive',' class="active"');

		$this->obj->assign('stationInfo',StationModel::veroList($this->adminInfo['station_id']));
		$this->obj->display('station_vero.html');
	}

	private function stationRegister(){
		$this->obj->display('station_register_info.html');
	}
	private function stationRegisterInfo(){
		if(!$this->isAjax()){
			echo json_encode(array('status'=>0));exit();
		}
		$r=StationModel::stationRegisterInfo($_POST,$this->adminInfo['id']);
		if($r){
			echo json_encode($r);exit();
			//echo json_encode(array('status'=>1));exit();
		}else{
			echo json_encode($r);exit();
			echo json_encode(array('status'=>0));exit();
		}
	}
}