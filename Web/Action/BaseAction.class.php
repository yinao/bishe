<?php
require_once(DIR.'/Web/libs/Smarty.class.php');

class BaseAction{
	
	protected $obj;
	protected $parameters = array();
	protected $rootUrl= NULL;
	protected $url=NULL;
	protected $adminInfo=NULL;
	public function __construct(){
		if(empty($this->obj)){
			$this->obj=new Smarty();
			$this->obj->template_dir=array(DIR.'/Web/templates');
			$this->obj->compile_dir=DIR.'/Web/templates_c';
			$this->obj->cache_dir=DIR.'/Web/cache';
		}
		if(empty($rootUrl)){
			$http=(
					(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') 
					|| (isset($_SERVER['HTTP_X_FORWARDED_PROTO'])
						&& $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))?"https://":"http://";
			$this->url = $http.$_SERVER['SERVER_NAME'].$_SERVER["PHP_SELF"];
			if(isset($_SERVER['QUERY_STRING'])&&!empty($_SERVER['QUERY_STRING'])){
				$this->url.='?'.$_SERVER['QUERY_STRING'];
			}
			$this->rootUrl=dirname($this->url);
		}
	}
	protected function getParameters(){
		$get=$_GET;
		foreach ($get as $key => $value) {
			$this->parameters['safe'][$key]=addslashes($value);
			$this->parameters['unsafe'][$key]=$value;
		}
	}
	protected function checkIsLogin(){
		session_start();
		//$_SESSION['user']=16;
		if(isset($_SESSION['user'])&&!empty($_SESSION['user'])){
			require DIR.'/Web/Model/LoginModel.class.php';
			$res=LoginModel::login($_SESSION['user']);
			if(!$res){
				return false;
			}
			$res['admin_power']=explode('-', $res['admin_power']);
			$this->adminInfo=$res;
			$this->obj->assign('adminInfo',$res);
			return $res;
		}
		return false;
	}
	protected function showLoginPage(){
		$this->obj->assign('rootUrl',$this->rootUrl);
		$this->obj->display('Index_login.html');
	}
	protected function errorPage($error,$errorInfo){
		
	}
	//页面的当前位置的提示函数
	protected function bread($level,$tips1,$link=NULL,$tips2=NULL){
		$bread=NULL;
		if($level==1){
			$bread="<li>{$tips1}</li>";
		}else if($level==2){
			$bread="<li><a href=\"{$this->rootUrl}/index.php?a={$link}\">{$tips1}</a></li><li>{$tips2}</li>";
		}
		return $bread;
	}
	protected function isAjax(){
		if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"])=="xmlhttprequest"){ 
			return true;
		}else{
			return false;
		}
	}
	protected function isPost(){

	}
	protected function isGet(){
		return $_SERVER['REQUEST_METHOD'] == 'GET' ? true : false;
	}
	protected function redirect($url){
		header("Location:".$this->rootUrl."/index.php?".$url);
	}

	protected function getMillisecond() {
		list($tmp1,$tmp2)=explode(" ",microtime());
		return (float)sprintf('%.0f', (floatval($tmp1) + floatval($tmp2)) * 1000);
	}
}