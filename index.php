<?php
	//error_reporting(0);
	header("Content-type: text/html; charset=utf-8");
	require_once('config.php');
	require_once('suseframe/suse.php');
	define('APP_PATH','home/');
	define('CACHEZT',0);//是否开启缓存
	SUSE::run($config);
?>