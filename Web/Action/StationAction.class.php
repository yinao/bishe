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
			case 'stUp':
				$this->stationRegister();
				break;
			case 'stPic':
				$this->stationPic();
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
		$this->obj->assign('sdActive',' class="active"');
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

	private function stationPic(){
		if($this->isAjax()){
			if(isset($_POST['tog'])){
				$pic=isset($_POST['pic'])?$_POST['pic']:null;
				$file=StationModel::delPic(array("id"=>$this->adminInfo['station_id'],'tog'=>$_POST['tog'],'pic'=>$pic));
				if(!$file){
					echo json_encode(array('status'=>0,'msg'=>"删除失败"));exit();
				}else{
					$file=DIR.'/Uploads/'.$file[0].'/'.$file[1];
					if(file_exists($file)){
						unlink($file);
					}
					echo json_encode(array('status'=>1,'msg'=>"删除成功"));exit();
				}
			}else{
				echo json_encode(array('status'=>0,'msg'=>'发生错误'));exit();
			}
		}

		if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
			require DIR.'/Web/Common/Upload.class.php';
			$fileName=time();
			$secordName=StationModel::uploadPic(array('id'=>$this->adminInfo['station_id'],'tog'=>'fetch'));
			$tog=null;
			$pic=null;
			$upload=new Upload(DIR.'/Uploads/'.$secordName.'/',$fileName,'image',500);
			if($_POST['act']=='update'){
				$uploadRes=$upload->setUpload();
				$ext=$upload->extend();
				if($uploadRes['status']==0){
					echo $uploadRes['msg'];exit();
				}
				$r=StationModel::uploadPic(array('id'=>$this->adminInfo['station_id'],'tog'=>'update','fileName'=>$fileName.'.'.$ext));
				//echo $r;exit();
				$tog='cover';
			}else if($_POST['act']=='insert'){
				$uploadRes=$upload->setUpload();
				$ext=$upload->extend();
				if($uploadRes['status']==0){
					echo $uploadRes['msg'];exit();
				}
				$r=StationModel::uploadPic(array('id'=>$this->adminInfo['station_id'],'tog'=>'insert','url'=>$secordName.'/'.$fileName.'.'.$ext));
				$tog="pic";
				$pic=$r;
				//echo $r;exit();
			}else{
				echo '发生错误';exit();
			}
			echo '<img src="'.$this->rootUrl.'/Uploads/'.$secordName.'/'.$fileName.'.'.$ext.'"><span class="close" title="删除" data-tog="'.$tog.'" data-pic="'.$pic.'" onclick="del(this);"></span>';
			exit();
		}
		if($this->adminInfo['station_id']!=0){
			$res=StationModel::fetchAllPic($this->adminInfo['station_id']);
			$this->obj->assign('stationPic',$res);
		}
		$this->obj->assign('sdPactive',' class="active"');
		$this->obj->display('station_register_pic.html');
	}
}