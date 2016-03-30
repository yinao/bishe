<?php
define('DIR',__DIR__);

$act = isset($_GET["a"])?$_GET['a']:NULL;
$act = empty($act)?'index':$act;
$act = ucfirst($act).'Action';
$file = DIR.'/Web/Action/'.$act.'.class.php';
if(file_exists($file)){
	require_once($file);
	$action = new $act;
	$action->run();
}else{
	echo "visited error!";die();
}
