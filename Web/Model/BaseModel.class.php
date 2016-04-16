<?php
class BaseModel{
	private static $pdo=NULL;
	private static $dbms="mysql";
	private static $host="localhost";
	private static $user="root";
	private static $pwd="kaileiao";
	private static $port=3306;
	private static $charset="utf-8";
	private static $dbName="bishe";
	protected static $prefix="bishe_";
	protected static function getPdo(){
		if(empty(self::$pdo)){
			$dsn=self::$dbms.":host=".self::$host.";dbname=".self::$dbName;
			try{
				self::$pdo=new PDO($dsn,self::$user,self::$pwd,
					array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			
		}
	}
	protected static function fetchAll($sql,$parameters){
		self::getPdo();
		$r=self::$pdo->prepare($sql);
		$r->execute(self::filter($parameters));
		$res=$r->fetchAll();
		return $res;
	}

	protected static function fetchAllIn($sql,$column,$parameters){
		self::getPdo();
		$place_holders=implode(',',array_fill(0,count($parameters),'?'));
		$sql+=" where {$column} in ({$place_holders})";
		$r=self::$pdo->prepare($sql);
		$r->execute(self::filter($parameters));
		$res=self::$fetchAll();
		return $res;
	}

	protected static function fetchOne($sql,$parameters){
		self::getPdo();
		$r=self::$pdo->prepare($sql);
		$r->execute(self::filter($parameters));
		$res=$r->fetch();
		return $res;
	}

	protected static function queryAll($sql){
		self::getPdo();
		$res=array();
		foreach(self::$pdo->query($sql) as $row){
			$res[]=$row;
		}
		return $res;
	}

	protected static function execute($sql,$parameters){
		self::getPdo();
		try{
			$r=self::$pdo->prepare($sql);
			$row=$r->execute(self::filter($parameters));
			return $row;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}

	protected static function exec($sql){
		self::getPdo();
		$rows=self::$pdo->exec($sql);
		return $rows;
	}

	protected static function execIn($sql,$column,$parameters){
		self::getPdo();
		try{
			$place_holders=implode(',',array_fill(0,count($parameters),'?'));
			$sql.=" where {$column} in ({$place_holders})";
			$r=self::$pdo->prepare($sql);
			$r->execute(self::filter($parameters));
		}catch(PDOException $e){
			echo $e->getMessage();exit();
		}
	}

	protected static function rowCount($sql,$parameters){
		self::getPdo();
		$r=self::$pdo->prepare($sql);
		$r->execute(self::filter($parameters));
		$rowsCount=$r->rowCount;
		return $rowsCount;
	}

	protected static function delAll(){
		self::getPdo();
	}

	protected static function filter($parameters){
		//foreach ($parameters as $key => $value) {
			
		//}
		return $parameters;
	}

	protected static function close(){
		self::$pdo=NULL;
	}
}