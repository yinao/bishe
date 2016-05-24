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

	public static function indexInfo($adminInfo){
		$indexInfo=array();
		$sql="select count(id) as order_count from bishe_record";
		$order_res=parent::fetchOne($sql,null);
		$sql="select count(id) as user_count from bishe_user";
		$user_res=parent::fetchOne($sql,null);
		$sql="select count(news_id) as user_count from bishe_news";
		$news_res=parent::fetchOne($sql,null);
		$sql="select count(id) as station_count from bishe_station";
		$station_res=parent::fetchOne($sql,null);
		return array($order_res[0],$user_res[0],$news_res[0],$station_res[0]);
	}
}