<?php
require 'BaseModel.class.php';
class ApiModel extends BaseModel{
	public static function login($paras){
		//$paras的参数顺序有phone,paw
		return parent::fetchOne("select * from bishe_user where user_phone=? and user_paw=?",array($paras['phone'],md5($paras['paw'])));
	}

	public static function register($paras){
		//$paras参数有phone,name,paw
		$check_sql="select id from bishe_user where user_phone=?";
		$check_res=parent::fetchOne($check_sql,array($paras['phone']));
		//return $check_res;exit();
		if(!empty($check_res)){return 'exists';exit();}
		//exit();
		$insert_sql="insert into bishe_user (user_phone,user_name,user_paw,create_time) values (?,?,?,?)";
		$para=array();
		$paras['paw']=md5($paras['paw']);
		foreach($paras as $v){
			array_push($para,$v);
		}
		array_push($para,time());
		$r=parent::execute($insert_sql,$para);
		return 'ok';
	}

	public static function stationList($para,$url){
		$station_sql="select count(id) from bishe_station where station_status=1";
		$rows=parent::fetchOne($station_sql,null);

		require DIR.'/Web/Common/Page.class.php';
		//$para=isset($para['p'])?$para['p']:1;
		$pages = new Page($rows[0],null,$para,10);
		$condition=$pages->getCondition();
		$totalPage=$pages->getPages();
		unset($pages);

		//$sql_para="concat(station_num,'/',station_picture),station_name,station_phone,id";

		$station_sql="select concat(station_num,'/',station_picture) as picture_url,station_name,station_phone,id from bishe_station where station_status=1 order by id desc";
		$station_sql.=" limit %start%,%end%";
		$station_sql=str_replace(array('%start%','%end%'), array($condition[0],$condition[1]), $station_sql);

		$res=parent::fetchAll($station_sql,null,true);

		return array('station'=>$res,'pages'=>$totalPage);

	}
	public static function stationInfo($stationId){
		$station_sql="select * from bishe_station where id={$stationId}";
		$station_res=parent::fetchOne($station_sql,null,true);

		$vero_res=array();
		$picture_res=array();
		if(!empty($station_res)){
			$vero_sql="select * from bishe_vero where station_id={$station_res['id']} and vero_status=1 and vero_nums>0";
			$vero_res=parent::fetchAll($vero_sql,null,true);

			$picture_sql="select * from bishe_picture where station_id={$station_res['id']}";
			$picture_res=parent::fetchAll($picture_sql,null,true);
		}

		return array('station'=>$station_res,'vero'=>$vero_res,'picture'=>$picture_res);
	}

	public static function veroInfo($paras){
		$vero_sql="select * from bishe_vero where id=? and station_id=? and vero_status=1";
		$para=array();
		array_shift($paras);
		foreach($paras as $v){
			$para[]=$v;
		}
		$vero_res=parent::fetchOne($vero_sql,$para,true);
		return $vero_res;
	}

	public static function inoculoator($paras){
		$sql="select * from bishe_inoculator where userId=? order by id desc";
		$res=parent::fetchAll($sql,array($paras),true);
		return $res;
	}

	public static function addInoculator($paras){
		$sql="insert into bishe_inoculator (userId,name,age,sex,height,weigh,healthy,createTime) values (?,?,?,?,?,?,?,?)";
		array_shift($paras);
		$para=array();
		foreach($paras as $item){
			$para[]=$item;
		}
		$para[]=time();
		$r=parent::execute($sql,$para);
		return $r;
	}

	public static function delIno($id){
		$sql="delete from bishe_inoculator where id=?";
		return parent::execute($sql,array($id));
	}

	public static function fetchRecord($paras){
		$sql="select t1.* from bishe_record as t1 where t1.user_id in
					(select t2.id from bishe_inoculator as t2,bishe_user as t3 where t3.id=? and t3.id=t2.userId) order by t1.id desc";
		$res=parent::fetchAll($sql,array($paras['id']),true);
		return $res;

	}

	public static function addRecord($paras){
		$inoid=explode('-', $paras['userid']);
		$vero_nums=parent::fetchOne("select vero_nums from bishe_vero where vero_status=1 and id=?",array($paras['veroid']));
		if(empty($vero_nums)){
			return array('status'=>0,'msg'=>'请重新选择疫苗');
		}
		if($vero_nums['vero_nums']<count($inoid)){
			return array('status'=>0,'msg'=>'接种的人数太多了');
		}
		$record_sql="insert into bishe_record (user_id,station_id,vero_id,order_time,order_num,create_time,is_deleted,is_dealed) values (?,?,?,?,?,?,?,?)";
		$paras['ordertime']=strtotime($paras['ordertime']);
		$r=null;
		for($i=0;$i<count($inoid);$i++){
			$para=array();
			foreach($paras as $item){
				array_push($para, $item);
			}
			array_push($para,'RE'.time().rand(100,999));
			array_push($para,time());
			array_push($para,0);
			array_push($para,0);
			$para[0]=$inoid[$i];
			//print_r($para);
			$r=parent::execute($record_sql,$para);
			if(!$r){
				return array('status'=>0,'msg'=>'发生错误');
				break;
			}
		}
		if(empty($r)){
			return array('status'=>0,'msg'=>'发生错误');
		}else{
			parent::execute("update bishe_vero set vero_nums=? where id=?",array($vero_nums['vero_nums']-count($inoid),$paras['veroid']));
			return array('status'=>1);
		}
	}

	public static function orderInfo($id){
		$sql="select t1.*,t2.station_num,t3.vero_num,t4.name as user_name
				from bishe_record as t1
				left join bishe_station as t2 on t1.station_id=t2.id
				left join bishe_vero as t3 on t1.vero_id=t3.id
				left join bishe_inoculator as t4 on t1.user_id=t4.id
				where t1.id=?";
		$res=parent::fetchOne($sql,array($id),true);
		return $res;
	}

	public static function news($paras){
		$sql="select news_id,news_title,news_createTime from bishe_news where news_isDeleted=0";
		$condition=null;
		$value=null;
		if(isset($paras['sort'])&&!empty($paras['sort'])){
			$condition[]="news_sortId=?";
			$value[]=$paras['sort'];
		}
		if(isset($paras['title'])&&!empty($paras['title'])){
			$condition[]="news_title like ?";
			$value[]='%'.$paras['title'].'%';
		}
		if(!empty($condition)){
			$condition=implode($condition, ' and ');
			$sql.=' and '.$condition;
		}
		$sql.=" order by news_id desc";

		//return $sql;
		$news_res=parent::fetchAll($sql,$value,true);

		$sort_sql="select sort_id,sort_name from bishe_sort order by sort_id desc";
		$sort_res=parent::fetchAll($sort_sql,null,true);
		return array('news'=>$news_res,'sorts'=>$sort_res);
	}

	public static function newsInfo($id){
		$sql="select t1.*,t2.* from bishe_news as t1 left join bishe_sort as t2 on t1.news_sortId=t2.sort_id where news_isDeleted=0 and news_id=?";
		return parent::fetchOne($sql,array($id),true);
	}
}
