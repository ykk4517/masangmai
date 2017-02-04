<?php
	class configController{
		public function __construct(){
			session_start();
			if(!(isset($_SESSION['admintel']))&&(SUSE::$method!='login')){
				showmessage('请登录后在操作！', 'admin.php?c=index&m=login');
				exit;
			}
		}
		public function __call($func="",$param="")
		{
			showmessage('页面不存在', 'admin.php?c=config&m=index');
			exit;
		}
		public function index(){
			VIEW::display('config.html');
		}
		function savesetting(){
			$setfile='set.conf';
			$c=$_POST;
			$settingstr="";
			foreach($c as $key=>$v){
				$settingstr.= $key."=\"".$v."\"\n";
			}
			if(file_put_contents($setfile,$settingstr)){
				showmessage('修改成功','admin.php?c=config&m=index');
			}else{
				showmessage('修改失败','admin.php?c=config&m=index');
			}
		}
	}
?>