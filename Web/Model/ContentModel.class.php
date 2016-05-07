<?php
require_once('BaseModel.class.php');
class ContentModel extends BaseModel{
	public static function fetchArticle(){
		$sql="select t1.news_id,t1.news_sortId,t1.news_title,t1.news_createTime,t2.sort_name from ";
		$sql.=parent::$prefix."news as t1,".parent::$prefix."sort as t2 where t1.news_isDeleted=0 and t1.news_sortId=t2.sort_id limit 0,10";
		//echo $sql;exit();
		return parent::queryAll($sql);
	}
	public static function fetchArticleOne($id){
		$sql="select * from ".parent::$prefix."news where news_id=?";
		return parent::fetchOne($sql,array($id));
	}
	public static function articleAction($paras){
		switch ($paras['tog']) {
			case 'a':
				$sql="insert into bishe_news (news_sortId,news_title,news_content,news_keyword,news_description,news_createTime) values (?,?,?,?,?,?)";
				$paras['tog']=time();
				$para=array();
				foreach ($paras as $key => $value) {
					$para[]=$value;
				}
				array_pop($para);
				$rows=parent::execute($sql,$para);
				return $rows;
				break;
			case 'u':
				$sql="update bishe_news set news_sortId=?,news_title=?,news_content=?,news_keyword=?,news_description=?,news_createTime=? where news_id=?";
				$paras['tog']=time();
				$para=array();
				foreach ($paras as $key => $value) {
					$para[]=$value;
				}
				$rows=parent::execute($sql,$para);
				return $rows;
				break;
			case 'd':
				$arrId=explode(',', $paras['i']);
				array_filter($arrId);
				$sql="update bishe_news set news_isDeleted=1";
				$row=parent::execIn($sql,'news_id',$arrId);
				return $row;
				break;
			default:
				return 0;
				break;
		}
	}
	public static function fetchSort(){
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
				$para=array(trim($paras['i']),time());
				return parent::execute($sql,$para);
				break;
			case 'u':
				$sql="update ".parent::$prefix."sort set sort_name=?,sort_createTime=? where sort_id=?";
				$para=array(trim($paras['i']),time(),$paras['n']);
				return parent::execute($sql,$para);
				break;
			default:
				return 0;
				break;
		}
	}
}