<?php
require 'BaseModel.class.php';
class IndexModel extends BaseModel{
	public static function login($paras){
		$condition=array();
		$value=array();
		if(isset($paras['username'])&&!empty($paras['username'])){
			$condition[]='admin_account=?';
			$value[]=$paras['username'];
		}
		if(isset($paras['paw'])&&!empty($paras['paw'])){
			$condition[]='admin_paw=?';
            $value[]=strtolower(md5($paras['paw']));
		}
		//if(count($condition)!=2) return false;
		$login_sql="select * from bishe_admin";
		$condition=implode($condition, ' and ');
		$login_sql.=" where ".$condition;
		//echo $login_sql;
		return parent::fetchOne($login_sql,$value);
	}
}