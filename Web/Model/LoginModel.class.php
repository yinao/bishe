<?php
class LoginModel extends BaseModel{
	public static function login($id){
		$sql="select * from bishe_admin where id={$id}";
		$res=parent::fetchOne($sql,null);
		//$res['admin_power']=explode('-',$res['admin_power']);
		//print_r($res);exit();
		return $res;
	}
}