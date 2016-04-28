<?php
/**
*
*/
define('DIR',__DIR__);
define('ROOT','IS_ROOT');


$file=DIR.'/Web/Action/ApiAction.class.php';

if(file_exists($file)){
	require $file;
	$api=new ApiAction();
	$api->run();
}else{
	echo json_encode(array('status'=>0));exit();
}