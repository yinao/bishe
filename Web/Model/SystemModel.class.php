<?php
require_once('BaseModel.class.php');
class SystemModel extends BaseModel{
	public static function fetchMan($paras){
		$sql="select * from bishe_admin where admin_parent={$paras['parent']}";
		$res=parent::queryAll($sql);
		return $res;
	}
	public static function systemAction($paras,$adminInfo){
		switch ($paras['act']){
			case 'a':
				$sql="insert into bishe_admin (admin_role,admin_power,admin_account,admin_name,admin_paw,admin_phone,createTime,admin_parent,station_id) values (?,?,?,?,?,?,?,?,?)";
				$para=array();
				$paras['act']=time();
				$paras['pw']=md5($paras['pw']);
				foreach ($paras as $v){
					$para[]=$v;
				}
				array_unshift($para, 1);
				array_pop($para);
				array_push($para, $adminInfo['admin_parent']==0?$adminInfo['id']:$adminInfo['admin_parent']);
				array_push($para, $adminInfo['station_id']!=0?$adminInfo['station_id']:0);
				$res=parent::execute($sql, $para);
				return $res;
				break;
			case 'd':
				$sql="delete from bishe_admin";
				$arrId=explode(',', $paras['i']);
				array_filter($arrId);
				$rows=parent::execIn($sql, 'id', $arrId);
				return $rows;
				break;
			case 'u':
				$sql='update bishe_admin set admin_power=?,admin_account=?,admin_name=?,';
				if(isset($paras['pw'])&&!empty($paras['pw'])){
					$sql.='admin_paw=?,';
					$paras['pw']=md5($paras['pw']);
				}else{
					unset($paras['pw']);
				}
				$sql.='admin_phone=?,createTime=? where id=?';
				$para=array();
				$paras['act']=time();
				foreach($paras as $v){
					$para[]=$v;
				}
				$r=parent::execute($sql, $para);
				return $r;
				break;
			default:
				return 0;
		}
	}
}