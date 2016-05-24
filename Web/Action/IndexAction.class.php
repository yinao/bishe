<?php
/**
* 
*/
require_once('BaseAction.class.php');
require DIR.'/Web/Model/IndexModel.class.php';
class IndexAction extends BaseAction{
	//private $loginStatus;
	public function run(){

		//$this->obj->caching=false;
		$this->getParameters();
		$paras=isset($this->parameters['safe']['e'])?$this->parameters['safe']['e']:NULL;
		switch ($paras) {
			case 'sign':
				$this->login();
				break;
			case 'verify':
				$this->verifyCode();
			case 'cvc':
				$this->checkVerifyCode();
				break;
			case 'out':
				$this->loginout();
				break;
			default:
				if(!$this->checkIsLogin()){
					$this->showLoginPage();
				}else{
					if($this->adminInfo['admin_role']){
						$this->index();
					}else{
						$this->redirect('a=st');
					}
				}	
				break;
		}
	}

	private function index(){
		$this->obj->assign('title','首页--后台管理端');
		$this->obj->assign('keyword','关键字');
		$this->obj->assign('description','网站页面内容描述');
		$this->obj->assign('content','这是首页显示');

		$this->obj->assign('rootUrl',$this->rootUrl);
		$this->obj->assign('indexActive',' class="active"');
		$this->obj->assign('indexInfo',IndexModel::indexInfo($this->adminInfo));
		$this->obj->assign('lanague',PHP_VERSION);
		$this->obj->assign('systemType',array(php_uname('s'),php_uname('r')));
		#$this->obj->assign('mysqlType',mysql_get_server_info());
		//$this->obj->display('Index_login.html');
		$this->obj->display('Index_index.html');
	}

	private function login(){
		if($this->isAjax()){
			//$res=array('status'=>1);
			$username=$_POST['user'];
			if(empty($username)||$username==''){
				echo json_encode(array('status'=>0,'msg'=>'用户名不能为空'));exit();
			}
			$paw=$_POST['paw'];
			if(empty($paw)||$paw==''){
				echo json_encode(array('status'=>0,'msg'=>'密码不能为空'));exit();
			}
			$code=$_POST['code'];
			session_start();
			if(md5($code)!=$_SESSION['verify']){
				$res['status']=0;
				$res['msg']='验证码不正确';
				echo json_encode(array('status'=>0,'msg'=>'验证码不正确'));exit();
			}
			$r=IndexModel::login(array('username'=>$username,'paw'=>$paw));
			//echo json_encode(array('username'=>$username,'paw'=>$paw));exit();
			if(!$r){
				echo json_encode(array('status'=>0,'msg'=>'登录账号或密码错误'));exit();
			}
			$_SESSION['user']=$r['id'];
			echo json_encode(array('status'=>1));exit();
		}else{
			$this->showLoginPage();exit();
		}
		
	}
	private function loginout(){
		session_start();
		session_destroy();
		echo json_encode(array('status'=>1));exit();
	}
	private function checkVerifyCode(){
		session_start();
		$res=array('status'=>1);
		if(!isset($_SESSION['verify'])){
			$res['status']=0;
			$res['msg']="验证码超时";
		}
		if(md5($_POST['code'])!=$_SESSION['verify']){
			$res['status']=0;
			$res['msg']="验证码错误";
		}
		echo json_encode($res);exit();
	}
	private function verifyCode(){
		require DIR.'/Web/Common/Image.class.php';
		Image::buildImageVerify();
	}
}