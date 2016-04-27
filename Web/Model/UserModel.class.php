<?php
require_once 'BaseModel.class.php';
class UserModel extends BaseModel{
	public static function fetchAll($paras=NULL){
		//print_r($paras);exit();
		$conditions=NULL;
		$sql="select * from bishe_user where isDeleted=%d% limit %start%,%end%";
		$sql=str_replace(array('%d%','%start%','%end%'), array($paras[0]['d'],$paras[1][0],$paras[1][1]), $sql);
		//echo $sql;exit();
		$res=parent::queryAll($sql);
		return $res;
	}
	
	public static function rowCount($isDeleted){
		$sql='select count(*) from bishe_user where isDeleted='.$isDeleted;
		//echo $sql;exit();
		$totalRows=parent::fetchOne($sql, null);
		return $totalRows[0];
	}
	
	public static function userAction($paras){
		switch ($paras['tog']){
			case 'd':
				$arrId=explode(',', $paras['i']);
				array_filter($arrId);
				$sql="update bishe_user set isDeleted=1";
				$row=parent::execIn($sql,'id',$arrId);
				return $row;
				break;
			default:
				return 0;
				break;
		}
	}
	
}