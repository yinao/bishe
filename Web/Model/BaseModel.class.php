<?php
class BaseModel{
	private static $pdo=NULL;//pdo对象
	private static $dbms="mysql";
	//private static $host="114.215.87.180";//mysql数据库服务器的地址
	private static $host="127.0.0.1";
	private static $user="root";//mysql登录名
	//private static $pwd="3fd52b4067";//mysql登录密码
	private static $pwd="";
	private static $port=3306;//mysql服务端口
	private static $charset="utf-8";//mysql数据库使用的字符编码
	private static $dbName="bishe";//数据库名
	protected static $prefix="bishe_";//数据库前缀
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
	protected static function fetchAll($sql,$parameters,$assoc=false){
		self::getPdo();
		$r=self::$pdo->prepare($sql);
		$r->execute(self::filter($parameters));
		$res=array();
		if($assoc){
			$res=$r->fetchAll(PDO::FETCH_ASSOC);
		}else{
			$res=$r->fetchAll();
		}
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

	protected static function fetchOne($sql,$parameters,$assoc=false){
		self::getPdo();
		try{
			$r=self::$pdo->prepare($sql);
			$r->execute(self::filter($parameters));
			$res=array();
			if($assoc){
				$res=$r->fetch(PDO::FETCH_ASSOC);
			}else{
				$res=$r->fetch();
			}
			return $res;
		}catch(PDOException $e){
			return  $e->getMessage();
		}
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

	protected static function insertData($sql,$parameters){
		self::getPdo();
		$r=self::$pdo->prepare($sql);
		$r->execute(self::filter($parameters));
		return self::$pdo->lastInsertId();
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
			return $r->execute(self::filter($parameters));
		}catch(PDOException $e){
			echo $e->getMessage();exit();
		}
	}

	protected static function rowCount($sql,$parameters){
		self::getPdo();
		$r=self::$pdo->prepare($sql);
		$r->execute(self::filter($parameters));
		return $r->rowCount();
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
