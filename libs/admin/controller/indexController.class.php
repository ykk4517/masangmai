<?php
	class indexController{
		public function __construct(){
			session_start();
			if(!(isset($_SESSION['admintel']))&&(SUSE::$method!='login')){
				showmessage('请登录后在操作！', 'admin.php?c=index&m=login');
				exit;
			}
		}
		public function __call($func="",$param="")
		{
			showmessage('页面不存在', 'admin.php?c=index&m=index');
			exit;
		}
		public function index(){
			VIEW::display('index.html');
		}
		public function login(){
			if($_POST){
					if (!preg_match("/^[0-9]+$/",$_POST['tel'])) {
						showmessage('手机号非法','admin.php?c=index&m=index');
						exit;
					}
					$tel = $_POST['tel'];
					$password = encrypt($_POST['password']);
					$result = DB::findOne("select password,is_admin from shop_user where tel = $tel");
					if(($password == $result['password'])&&($result['is_admin']=="1")){
						$_SESSION['admintel'] =$tel;
						showmessage('登陆成功','admin.php?c=index&m=index');
					}else{
						showmessage('登陆失败','admin.php?c=index&m=login');
					}
					exit;
			}
			VIEW::display('login.html');
		}
		public function clearallcache(){
			VIEW::clear_all_cache();
			showmessage('清理缓存成功','admin.php?c=index&m=index');
		}
		public function clearalltemp(){
			VIEW::clear_all_temp();
			showmessage('清理编译文件成功','admin.php?c=index&m=index');
		}
		public function logout(){
			unset($_SESSION['admintel']);
			showmessage('退出成功！', 'admin.php?c=index&m=login');
		}

		


	}
?>