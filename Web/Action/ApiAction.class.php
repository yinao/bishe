<?php
require 'ApiBaseAction.class.php';
require 'BaseAction.class.php';
require DIR.'/Web/Model/ApiModel.class.php';
class ApiAction extends BaseAction{

	private function login($paras){
		//$paras=$_POST;//参数有phone,paw
		//array_shift($paras);
		if(!isset($paras['phone'])||!isset($paras['paw'])){
			echo 0;exit();
		}
		$r=ApiModel::login($paras);
		if($r) echo 1;
		else echo 0;
	}	

	private function register($paras){
		//$paras=$_POST;//参数有phone,paw,name,
		array_shift($paras);
		if(!isset($paras['phone'])||!isset($paras['paw'])||!isset($paras['name'])){
			echo json_encode(array('status'=>0));exit();
		}
		$r=ApiModel::register($paras);
		//print_r($r);exit();
		if($r=='exists'){echo json_encode(array('status'=>2,'msg'=>'手机号已存在'));exit();}
		else if($r=='ok'){
			echo json_encode(array('status'=>1));exit();
		}else{
			echo json_encode(array('status'=>0));exit();
		}
	}

	private function stationList($paras){
		$paras['p']=!isset($paras['p'])?1:$paras['p'];
		$res=ApiModel::stationList($paras['p']);
		echo json_encode($res);exit();
	}

	private function stationInfo($paras){
		$res=ApiModel::stationInfo($paras['id']);
		echo json_encode($res);exit();
	}

	private function veroInfo($paras){

	}

	private function addInoculator($paras){
		$r=ApiModel::addInoculator($paras);
		if($r){echo 1;exit();}
		else{echo 0;exit();}
	}

	private function record($paras){
		$res=ApiModel::fetchRecord($paras);
		echo json_encode($res);exit();
	}

	private function addRecord($paras){
		array_shift($paras);
		$res=ApiModel::addRecord($paras);
		if($res){echo 1;exit();}
		else{echo 0;exit();}
	}

	public function run(){
		$this->getParameters();
		$method=isset($this->parameters['safe']['a'])?$this->parameters['safe']['a']:null;
		$methods=get_class_methods('ApiAction');
		$i=0;$length=count($methods);
		while($i<$length&&$methods[$i]!=$method){
			$i++;
		}
		if($i==$length){
			echo json_encode(array('status'=>0));exit();
		}else{
			$this->$method($this->parameters['safe']);
		}
		//print_r($methods);
	}
}
