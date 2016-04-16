<?php
require_once('BaseModel.class.php');
class ContentModel extends BaseModel{
	public static function fetchSort(){
		parent::getPdo();
		$sql="select sort_id,sort_name,sort_createTime from ".parent::$prefix."sort";
		return parent::queryAll($sql);
	}
	public static function sortAction($paras){
		switch ($paras['a']) {
			case 'd':
				$arrId=explode(',', $paras['i']);
				array_filter($arrId);
				$sql="delete from ".parent::$prefix."sort";
				return parent::execIn($sql,'sort_id',$arrId);
				break;
			case 'a':
				$sql="insert into ".parent::$prefix."sort (sort_name,sort_createTime) values (?,?)";
				$para=array(trim($paras['n']),time());
				return parent::execute($sql,$para);
				break;
			case 'u':
				$sql="update ".parent::$prefix."sort set sort_name=?,sort_createTime=? where sort_id=?";
				$para=array(trim($paras['n']),time(),$paras['i']);
				return parent::execute($sql,$para);
				break;
			default:
				return 0;
				break;
		}
	}
}