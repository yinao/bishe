<?php
require 'BaseModel.class.php';
class StationModel extends BaseModel{
	public static function fetchAll($paras,$url){
		$condition=array();
		$value=array();
		if(isset($paras['stationNum'])&&!empty($paras['stationNum'])){
			$condition[]='t1.station_num=?';
			$value[]=$paras['stationNum'];
		}
		if(isset($paras['stationStatus'])&&!empty($paras['stationStatus'])){
			$condition[]='t1.station_status=?';
			$value[]=$paras['stationStatus']-1>=0?$paras['stationStatus']-1:0;
		}
		//print_r($value);exit();
		$rows_sql="select count(t1.id) from bishe_station as t1";
		$value_sql="select t1.*,count(t2.id) as vero_counts 
				from bishe_station as t1 left join bishe_vero as t2
				on t1.id=t2.station_id";
		if(!empty($condition)){
			$condition=implode($condition, ' and ');
			$rows_sql.=' where '.$condition;
			$value_sql.=" where ".$condition;
		}
		$rows=parent::fetchOne($rows_sql,$value);

		//echo $rows[0];exit();
		require DIR.'/Web/Common/Page.class.php';
		$page=new Page($rows[0],$url,$paras['p']);
		$limits=$page->getCondition();
		$pager=$page->setPage();
		unset($page);
		
		$value_sql.=' limit %start%,%end%';
		$value_sql=str_replace(array('%start%','%end%'), array($limits[0],$limits[1]), $value_sql);
		//echo $value_sql;exit();
		$res=parent::fetchAll($value_sql,$value);

		return array('pager'=>$pager,'list'=>$res);
	}

	public static function fetchOne($paras,$url){
		$condition=array();
		$value=array();
		if(isset($paras['i'])&&!empty($paras['i'])){
			$condition[]='id=?';
			$value[]=$paras['i'];
		}
		if(isset($paras['stationNum'])&&!empty($paras['stationNum'])){
			$condition[]='station_num=?';
			$value[]=$paras['stationNum'];
		}
		if($paras['station_id']){
			$condition[]='id=?';
			$value[]=$paras['station_id'];
		}
		$station_sql="select * from bishe_station";
		$res=array();
		if(!empty($condition)){
			$condition=implode(' and ',$condition);
			$station_sql.=' where '.$condition;
			$res=parent::fetchOne($station_sql,$value);
		}
		if(!empty($res)&&$paras['admin_role']){

			$vero_sql="select count(id) from bishe_vero	where station_id=".$res['id'];

			$rows=parent::fetchOne($vero_sql,null);
			//echo $rows[0];exit();
			require DIR.'/Web/Common/Page.class.php';
			$page=new Page($rows[0],$url,$paras['p']);
			$limits=$page->getCondition();
			$pager=$page->setPage();
			unset($page);

			$vero_sql.=' limit %start%,%end%';
			$vero_sql=str_replace(array('count(id)','%start%','%end%'), array('*',$limits[0],$limits[1]), $vero_sql);
			//echo $vero_sql;exit();
			$vero=parent::fetchAll($vero_sql,null);

			return array('station'=>$res,'vero'=>$vero,'pager'=>$pager);
		}else{
			return array('station'=>$res);
		}
	}

	public static function action($paras){
		switch ($paras['tog']) {
			case 'fail':
				$value=array(3,$paras['i']);
				$sql="update bishe_station set station_status=? where id=?";
				return parent::execute($sql,$value);
				break;
			case 'pass':
				$value=array(1,$paras['i']);
				$sql="update bishe_station set station_status=? where id=?";
				return parent::execute($sql,$value);
			default:
				# code...
				return 0;
				break;
		}
		return 0;
	}

	public static function veroAction($paras,$stationId){
		switch ($paras['tog']) {
			case 'pass':
				$value=array($paras['i']);
				$sql="update bishe_vero set vero_status=1 where id=?";
				return parent::execute($sql,$value);
				break;
			case 'fail':
				$value=array($paras['i']);
				$sql="update bishe_vero set vero_status=3 where id=?";
				return parent::execute($sql,$value);
				break;
			case 'stop':
				$value=array($paras['i']);
				$sql="update bishe_vero set vero_status=2 where id=?";
				return parent::execute($sql,$value);
				break;
			case 'start':
				$value=array($paras['i']);
				$sql="update bishe_vero set vero_status=0 where id=?";
				return parent::execute($sql,$value);
				break;
			case 'add':
				$sql="insert into bishe_vero (vero_name,vero_instruction,create_time,vero_status,vero_num,station_id) values (?,?,?,?,?,?)";
				$para=array();
				$paras['tog']=time();
				foreach($paras as $v){
					$para[]=$v;
				}
				array_push($para,0);
				array_push($para,'VE'.time());
				array_push($para,$stationId);
				return parent::execute($sql,$para);
				break;
			default:
				return 0;
				break;
		}
	}

	public static function veroList($id){
		$vero_sql="select count(id) from bishe_vero	where station_id=".$id;

		$rows=parent::fetchOne($vero_sql,null);
		//echo $rows[0];exit();
		require DIR.'/Web/Common/Page.class.php';
		$page=new Page($rows[0],$url,$paras['p']);
		$limits=$page->getCondition();
		$pager=$page->setPage();
		unset($page);

		$vero_sql.=' limit %start%,%end%';
		$vero_sql=str_replace(array('count(id)','%start%','%end%'), array('*',$limits[0],$limits[1]), $vero_sql);
		//echo $vero_sql;exit();
		$vero=parent::fetchAll($vero_sql,null);

		return array('vero'=>$vero,'pager'=>$pager);
	}
	public static function stationRegisterInfo($paras,$adminId){
		$para=array();
		foreach($paras as $v){
			$para[]=$v;
		}
		$sql="insert into bishe_station (station_name,station_phone,station_address,station_description,create_time,station_num,station_picture,station_status) values (?,?,?,?,?,?,?,?)";
		array_push($para, time());
		array_push($para,'GB'.time());
		array_push($para,time().'.jpg');
		array_push($para,0);
		$id=parent::insertData($sql,$para);
		$admin_sql="update bishe_admin set station_id={$id} where id=$adminId";
		return parent::execute($admin_sql,null);
	}

	public static function veroAdd($paras,$stationId){

	}
}