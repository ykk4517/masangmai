<?php
	class commentController{
		public function __construct(){
			session_start();
			if(!(isset($_SESSION['admintel']))&&(SUSE::$method!='login')){
				showmessage('请登录后在操作！', 'admin.php?c=index&m=login');
				exit;
			}
		}
		public function __call($func="",$param="")
		{
			showmessage('页面不存在', 'admin.php?c=comment&m=index');
			exit;
		}
		public function index(){
			$page=isset($_GET['p'])?intval($_GET['p']):1;
			$num=5;   
			if($total=mysql_num_rows(DB::query("select * from shop_order"))){
			$pagenum=ceil($total/$num); 
			if($page>$pagenum || $page == 0){
		       showmessage('非法操作', 'admin.php?c=comment&m=index');
		       exit;
			}
			$offset=($page-1)*$num;
			$sql="select * from shop_comment left join shop_user on shop_comment.uid=shop_user.uid limit $offset,$num";
			$res=DB::findAll($sql);
			VIEW::assign("comment",$res);
			$pages="";
			if($pagenum>1){
				$allurl=$_SERVER['PHP_SELF']."?c=comment&m=index";
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
			VIEW::display('comlist.html');
		}
		public function delcomment(){
			DB::del("shop_comment","id= {$_GET['id']}");
			showmessage('删除成功','admin.php?c=comment&m=index');
		}
		public function delallcomment(){
			$arr=explode(",",$_POST['delg']);
			foreach($arr as $key=>$value){
				if ($value!=""){
				DB::del("shop_comment","id= {$value}");}
			}
			showmessage('删除成功', 'admin.php?c=comment&m=index');
		}
	}
?>