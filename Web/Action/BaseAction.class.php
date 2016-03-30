<?php
require_once(DIR.'/Web/libs/Smarty.class.php');
class BaseAction{
	
	protected $obj = NULL;
	protected $parameters = array();

	public function __construct(){
		if(empty($this->obj)){
			$this->obj=new Smarty();
			$this->obj->template_dir=array(DIR.'/Web/templates');
			$this->obj->compile_dir=array(DIR.'/Web/templates_c');
		}
	}
}