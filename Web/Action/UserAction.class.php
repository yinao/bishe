<?php

require_once('BaseAction.class.php');
class UserAction extends BaseAction{
	public function run(){
		echo 'this is userPage';
		$this->obj->assign('userActive',' class="active"');
	}
}