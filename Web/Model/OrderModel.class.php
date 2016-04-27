<?php
require 'BaseModel.class.php';
class OrderModel extends BaseModel{
	public static function fetchAll($paras,$url){
		//print_r($paras);exit();
		$condition=array();
		$value=array();
		if(isset($paras['orderNum'])&&!empty($paras['orderNum'])){
			$condition[]="t1.order_num=?";
			$value[]=$paras['orderNum'];
		}
		if(isset($paras['phone'])&&!empty($paras['phone'])){
			$condition[]="t2.user_phone=?";
			$value[]=$paras["phone"];
		}
		if(isset($paras['stationNum'])&&!empty($paras['stationNum'])){
			$condition[]="t5.station_num=?";
			$value[]=$paras["stationNum"];
		}
		if(isset($paras['veroNum'])&&!empty($paras['veroNum'])){
			$condition[]="t4.vero_num=?";
			$value[]=$paras["veroNum"];
		}

		$sql="select
				count(t1.id)
				from bishe_record as t1,bishe_user as t2,bishe_inoculator as t3,bishe_vero as t4,bishe_station t5
				where t1.is_deleted=0 and t1.user_id=t3.id and t3.userId=t2.id and t1.vero_id=t4.id and t1.station_id=t5.id";
		
		$fields='t1.id as order_id,t1.order_num,t1.order_time,t1.create_time,t1.is_dealed,
				t2.id as user_id,t2.user_phone,
				t4.id as vero_id,t4.vero_num,
				t5.id as station_id,t5.station_num';

		if($paras['station_id']){
			$sql.=" and t5.id={$paras['station_id']}";
		}
		if(!empty($condition)){
			$condition=implode($condition, ' and ');
			$sql.=' and '.$condition;
		}
		$r=parent::fetchOne($sql,$value);

		require DIR.'/Web/Common/Page.class.php';
		$page=new Page($r[0], $url,$paras['p']);
		$limits=$page->getCondition();
		$pager=$page->setPage();
		unset($page);

		$sql.=' limit %start%,%end%';
		$sql=str_replace(array('count(t1.id)','%start%','%end%'), array($fields,$limits[0],$limits[1]), $sql);
		//echo $sql;exit();
		$res=parent::fetchAll($sql,$value);

		return array('list'=>$res,'page'=>$pager);
	}

	public static function rowsCount($isDeleted){
		$sql="select count(*) from bishe_record where is_deleted=".$isDeleted;
		$res=parent::fetchOne($sql,null);
		return $res[0];
	}

	public static function fetchInfo($paras){
		$condition=array();
		$values=array();
		if(isset($paras['i'])&&!empty($paras['i'])){
			$condition[]='id=?';
			$value[]=$paras['i'];
		}
		if(isset($paras['orderNum'])&&!empty($paras['orderNum'])){
			$condition[]='order_num=?';
			$value[]=$paras['orderNum'];
		}
		$sql="select * from bishe_record where is_deleted=0";

		//判断当前账户有权查看别的防疫站的预约单的记录吗
		if($paras['station_id']){
			$sql.=" and station_id={$paras['station_id']}";
		}
		
		$res=array();
		if(!empty($condition)){
			$condition=implode($condition, ' and ');
			$sql.=' and '.$condition;
			$res=parent::fetchOne($sql,$value);
		}
		//print_r($res);exit();
		if(!empty($res)){
			$user_sql="select t1.id as user_id,t1.user_phone,t2.* from bishe_user as t1,bishe_inoculator as t2 where t1.id=t2.userId and t2.id=".$res['user_id'];
			$ulist=parent::fetchOne($user_sql,null);

			$vero_sql="select * from bishe_vero where id=".$res['vero_id'];
			$vlist=parent::fetchOne($vero_sql,null);

			$station_sql="select * from bishe_station where id=".$res['station_id'];
			$slist=parent::fetchOne($station_sql,null);
		}

		return array('record'=>$res,'user'=>$ulist,'vero'=>$vlist,'station'=>$slist);
	}

	public static function orderUsed($paras){
		$sql="update bishe_record set is_dealed=? where id=?";
		$para=array();
		foreach($paras as $v){
			$para[]=$v;
		}
		$r=parent::execute($sql,$para);
		return $r;
	}
}

