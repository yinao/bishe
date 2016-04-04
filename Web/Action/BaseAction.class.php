<?php
require_once(DIR.'/Web/libs/Smarty.class.php');
class BaseAction{
	
	protected $obj;
	protected $parameters = array();
	protected $rootUrl= NULL;
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
}