<?php
define('DIR',__DIR__);
define('ROOT','IS_ROOT');

$urlFile=DIR.'/Web/Config/url.php';
if(file_exists($urlFile)){
	include $urlFile;
}else{
	echo 'there is a file losing';die();
}

$act = isset($_GET["a"])?$_GET['a']:'i';
$act = $url[$act];
//
if(!isset($act)){
	$act="IndexAction";
}
$file = DIR.'/Web/Action/'.$act.'.class.php';

if(file_exists($file)){
	require_once($file);
	$action = new $act;
    
	$action->run();
}else{
	echo "visited error!";die();
}
