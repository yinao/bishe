<?php
require 'BaseModel.class.php';
class RegisterModel extends BaseModel{
	public static function register($paras){
		$r_sql="insert into bishe_admin (admin_name,admin_account,admin_phone,admin_paw,admin_role,admin_power,createTime) values (?,?,?,?,?,?,?)";
		//0,'1-1-1','".time()."'')";
		$paras['paw']=md5($paras['paw']);
		$paras['confirmPaw']=0;
		$para=array();
		foreach ($paras as  $value) {
			$para[]=$value;
		}
		array_push($para, '1-1-1');
		array_push($para, time());
		$r=parent::execute($r_sql,$para);
		return $r;
	}
}