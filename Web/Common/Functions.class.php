<?php
class Functions{
	
	static function session($name,$value,$expire=NULL){
		if(!isset($_SESSION)){
			session_start();
		}
		$expire=empty($expire)?360:$expire;
		setcookie(session_name(),session_id(),time()+$expire.'/');
        $_SESSION[$name]=$value;
	}
	static function getSession($name){
		session_start();
		if(isset($_SESSION[$name])){
			return $_SESSION[$name];
		}
		return NULL;
	}
}