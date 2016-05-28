<?php
require 'BaseAction.class.php';
require DIR.'/Web/Model/RegisterModel.class.php';
class RegisterAction extends BaseAction{
	public function run(){
		//echo 'sdfd';
		if($this->isAjax()){
			$paras=$_POST;
			//echo json_encode($paras);exit();
			if(!isset($paras['name'])||empty($paras['name'])){
				echo json_encode(array('status'=>0,'msg'=>'名称有错误'));exit();
			}
			if(!isset($paras['account'])||empty($paras['name'])
				||strlen($paras['account'])<5||strlen($paras['account'])>10){
				echo json_encode(array('status'=>0,'msg'=>'登录账号填写错误'));exit();
			}
			if(!isset($paras['phone'])||empty($paras['phone'])
				||strlen($paras['phone'])!=11){
				echo json_encode(array('status' =>0 ,'msg'=>'手机格式不正确' ));exit();
			}
			if(!isset($paras['paw'])||!isset($paras['confirmPaw'])
				||md5($paras['paw'])!=md5($paras['confirmPaw'])){
				echo json_encode(array('status' =>0 ,'msg'=>'密码输入错误' ));exit();
			}
			$res=RegisterModel::register($paras);
			if($res){
				//echo json_encode($res);exit();
				echo json_encode(array('status'=>1));exit();
			}else{
				echo json_encode($res);exit();
			}
		}
		$this->getParameters();//获取地址栏参数
		$para = isset($this->parameters['safe']['e'])?$this->parameters['safe']['e']:NULL;
		
		$this->obj->assign('url',$this->url);
		$this->obj->assign('rootUrl',$this->rootUrl);

		$this->obj->display('register_index.html');
	}
}