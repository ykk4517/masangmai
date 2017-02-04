<?php
	$currentdir = dirname(__FILE__);
	include_once($currentdir.'/function/function.php');
	include_once($currentdir.'/libs/core/DB.class.php');
	include_once($currentdir.'/libs/db/mysql.class.php');
	include_once($currentdir.'/libs/core/VIEW.class.php');
	include_once($currentdir.'/libs/view/Smarty/Smarty.class.php');
	class SUSE{
		public static $controller;
		public static $method;
		private static $config;
		private static function init_db(){
			DB::init('mysql', self::$config['dbconfig']);
		}
		private static function init_view(){
			VIEW::init('Smarty', array('template_dir' => 'tpl','compile_dir' => 'data/template_c','cache_dir' => 'data/cache','caching'=>CACHEZT));
		}
		private static function init_controllor(){
			self::$controller = isset($_GET['c'])?daddslashes($_GET['c']):'index';
		}
		private static function init_method(){
			self::$method = isset($_GET['m'])?daddslashes($_GET['m']):'index';
		}
		public static function run($config){
			self::$config = $config;
			self::init_db();
			self::init_view();
			self::init_controllor();
			self::init_method();
			C(self::$controller, self::$method);
		}
	}
?>