<?php
require_once('BaseModel.class.php');
class ContentModel extends BaseModel{
	public static function fetchSort(){
		parent::getPdo();
		$sql="select sort_id,sort_name,sort_createTime from ".parent::$prefix."sort";
		return parent::fetchAll($sql);
	}
}