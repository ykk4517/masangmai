<?php
	class messageController{
		public function __construct(){
			session_start();
			if(!(isset($_SESSION['admintel']))&&(SUSE::$method!='login')){
				showmessage('请登录后在操作！', 'admin.php?c=index&m=login');
				exit;
			}
		}
		public function __call($func="",$param="")
		{
			showmessage('页面不存在', 'admin.php?c=message&m=index');
			exit;
		}
		public function index(){
			$page=isset($_GET['p'])?intval($_GET['p']):1;
			$num=5;   
			if($total=mysql_num_rows(DB::query("select * from shop_message"))){
			$pagenum=ceil($total/$num); 
			if($page>$pagenum || $page == 0){
		       showmessage('非法操作', 'admin.php?c=message&m=index');
		       exit;
			}
			$offset=($page-1)*$num;
			$sql="select * from shop_message limit $offset,$num";
			$res=DB::findAll($sql);
			VIEW::assign("message",$res);
			$pages="";
			if($pagenum>1){
				$allurl=$_SERVER['PHP_SELF']."?c=message&m=index";
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

		public function messageadd(){
			if(isset($_GET['id'])){
				$res=DB::findone("select * from shop_message where id= {$_GET['id']}");
				VIEW::assignarr($res);
			}
			if($_POST){
				$nowtime=time();
				$arrayName = array('time' =>$nowtime);
				$messagedata=array_merge($_POST,$arrayName);
				if($_POST['id']){
					DB::update("shop_message",$_POST,"id ={$_POST['id']}");
				}else{
					DB::insert("shop_message",$messagedata);
				}
				showmessage('添加成功', 'admin.php?c=message&m=index');
				exit;
			}
			VIEW::display('messageadd.html');
		}
		public function delmessage(){
			DB::del("shop_message","id= {$_GET['id']}");
			showmessage('删除成功','admin.php?c=message&m=index');
		}
	}
?>