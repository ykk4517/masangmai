<?php
	class indexController{
		public function __construct(){
			session_start();
			if(!(isset($_SESSION['tel'])))
			{
				VIEW::assign("uid","");
			}else{
				$tel=$_SESSION['tel'];
				$result = DB::findOne("select * from shop_user where tel = $tel");
				VIEW::assignarr($result);
			}
			$sql="select * from shop_slide order by s_order";
			$res=DB::findAll($sql);
			VIEW::assign("slide",$res);	
			$sql="select * from shop_cate order by c_order";
			$res=DB::findAll($sql);
			VIEW::assign("cate",$res);
		}
		public function __call($func="",$param="")
		{
			showmessage('页面不存在', 'index.php?c=index&m=index');
			exit;
		}
		public function index(){
			$sql="select * from shop_good where state=1 order by g_order";
			$list=DB::findAll($sql);
			VIEW::assign("good",$list);
			VIEW::display('index.html');
		}
		public function register(){
			if (!preg_match("/^[0-9]+$/",$_POST['tel'])) {
				showmessage('手机号非法','index.php?c=index&m=index');
				exit;
			}
			$tel = DB::findOne("select tel from shop_user where tel = {$_POST['tel']}");
			if ($_POST['tel'] == $tel['tel']){
				showmessage('手机号已注册','index.php?c=index&m=index');
			}else{
			 	$password = encrypt($_POST['password']);
			 	$email = $_POST['email'];
			 	$nowtime= time();
				DB::insert('shop_user',array('tel' => $_POST['tel'],'password'=>$password,'email'=>$email,'regtime'=>$nowtime, ));
				showmessage('注册成功','index.php?c=index&m=index');
			}
		}
		public function login(){//
			if (!preg_match("/^[0-9]+$/",$_POST['tel'])) {
				showmessage('手机号非法','index.php?c=index&m=index');
				exit;
			}
			$tel = $_POST['tel'];
			$password = encrypt($_POST['password']);
			$result = DB::findOne("select password from shop_user where tel = $tel");
			if($password == $result['password']){
				$_SESSION['tel'] =$tel;
				showmessage('登陆成功','index.php?c=index&m=index');
			}else{
				showmessage('登陆失败','index.php?c=index&m=index');
			}

		}
		public function logins(){//
			VIEW::display('login.html');
		}
		public function logout(){
			unset($_SESSION['tel']);
			showmessage('退出成功！', 'index.php');
		}
		public function map(){
			VIEW::display('map.html');
		}
		
		public function good(){//
			$gid=$_GET['gid'];
			$sql="select * from shop_good where gid=$gid";
			$list=DB::findone($sql);
			VIEW::assignarr($list);
			VIEW::display('good.html');
		}
		public function goodcate(){//
			$gid = $_GET['gid'];
			$sql="select * from shop_good where cid = $gid and state=1";
			$list=DB::findAll($sql);
			VIEW::assign("good",$list);
			VIEW::display('index.html');
		}
		public function messagelist()
		{
			$page=isset($_GET['p'])?intval($_GET['p']):1;
			$num=5;   
			if($total=mysql_num_rows(DB::query("select * from shop_message"))){
			$pagenum=ceil($total/$num); 
			if($page>$pagenum || $page == 0){
		       showmessage('非法操作', 'index.php?c=index&m=messagelist');
		       exit;
			}
			$offset=($page-1)*$num;
			$sql="select * from shop_message limit $offset,$num";
			$res=DB::findAll($sql);
			VIEW::assign("message",$res);
			$pages="";
			if($pagenum>1){
				$allurl=$_SERVER['PHP_SELF']."?c=index&m=messagelist";
				$pages.="<ul data-am-widget=\"pagination\" class=\"am-pagination am-pagination-default\">";
				if($page!=1){
				$pages.="<li class=\"am-pagination-first\"><a href=\"".$allurl."&p=1\">首页</a></li>";
				$pages.="<li class=\"am-pagination-prev\"><a href=\"".$allurl."&p=".($page-1)."\">上一页</a></li>";
				}
				$pages.="<li class=\"am-active\"><span class=\"am-active\">".$page."</span></li>";
				if($page!=$pagenum){
				$pages.="<li class=\"am-pagination-next\"><a href=\"".$allurl."&p=".($page+1)."\">下一页</a></li>";
				$pages.="<li class=\"am-pagination-last\"><a href=\"".$allurl."&p=".$pagenum."\">尾页</a></li>";
				}
				$pages.="</ul>";
			}
			VIEW::assign("page",$pages);
			}
			VIEW::display('messagelist.html');
		}
		public function message()
		{
			$id=$_GET['id'];
			$sql="select * from shop_message where id=$id";
			$list=DB::findone($sql);
			VIEW::assignarr($list);
			VIEW::display('message.html');
		}
		public function order(){
			$nowtime=time();
			$arrayName = array('time' =>$nowtime);
			$orderdata=array_merge($_POST,$arrayName);
			foreach ($orderdata as $key=>$value)
			{
			    if ($key=="captchaa")
			        unset($orderdata[$key]);
			}
			DB::insert("shop_order",$orderdata);
			showmessage('购买成功','index.php?c=index&m=index');
		}
		public function ordergood(){
			for($i=1;$i<=$_POST['num'];$i++){
				DB::query("update shop_good set base_num=base_num+1 where gid={$_POST['gid']}");
			}
			DB::insert("shop_ordergood",$_POST);
			echo '{"success":true}';
			return;
		}
		public function checkcode(){
			$str=$_POST['captchaa'];
			header("Content-Type:text/html; charset=utf-8");
			$key = $_SESSION['PAOPHP_CAPTCHA_KEY'];
			if(!empty($_SESSION['PAOPHP_CAPTCHA_KEY']) && !empty($str) && strtolower($str) === strtolower($key)){
				$_SESSION['PAOPHP_CAPTCHA_KEY'] = null;
				unset($_SESSION['PAOPHP_CAPTCHA_KEY']);
				echo '{"success":true}';
				return;
			}else{
				return;
			}
		}
	}
?>