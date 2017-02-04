<?php
	class orderController{
		public function __construct(){
			session_start();
			if(!(isset($_SESSION['admintel']))&&(SUSE::$method!='login')){
				showmessage('请登录后在操作！', 'admin.php?c=index&m=login');
				exit;
			}
		}
		public function __call($func="",$param="")
		{
			showmessage('页面不存在', 'admin.php?c=order&m=index');
			exit;
		}
		public function index(){
			$page=isset($_GET['p'])?intval($_GET['p']):1;
			$num=5;   
			if($total=mysql_num_rows(DB::query("select * from shop_order"))){
			$pagenum=ceil($total/$num); 
			if($page>$pagenum || $page == 0){
		       showmessage('非法操作', 'admin.php?c=order&m=index');
		       exit;
			}
			$offset=($page-1)*$num;
			$sql="select * from shop_order order by oid desc limit $offset,$num";
			$res=DB::findAll($sql);
			VIEW::assign("order",$res);
			$pages="";
			if($pagenum>1){
				$allurl=$_SERVER['PHP_SELF']."?c=order&m=index";
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
			VIEW::display('orderlist.html');
		}
		public function getorder(){
			$orderid=$_GET['order_no'];
			$sql="select * from shop_ordergood where order_no = $orderid";
			$res=DB::findAll($sql);
			echo json_encode($res);
			return;
		}
		public function changeorder(){
			$data=DB::update("shop_order",array("state"=>$_POST['state']),"order_no ={$_POST['order_no']}");
			echo json_encode($data);
		}
		public function delorder(){
			DB::del("shop_ordergood","order_no= {$_GET['order_no']}");
			DB::del("shop_comment","order_id= {$_GET['order_no']}");
			DB::del("shop_order","order_no= {$_GET['order_no']}");
			showmessage('删除成功','admin.php?c=order&m=index');
		}
		public function delallorder(){
			$arr=explode(",",$_POST['delg']);
			foreach($arr as $key=>$value){
				if ($value!="") {
				DB::del("shop_ordergood","order_no={$value}");
				DB::del("shop_order","order_no={$value}");
				}
			}
			showmessage('删除成功', 'admin.php?c=order&m=index');
		}
	}
?>