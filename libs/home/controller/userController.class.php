<?php
	class userController{
		public function __construct(){
			session_start();
			if(!(isset($_SESSION['tel']))&&(SUSE::$method!='login'))
			{
				showmessage('非法访问','index.php?c=index&m=index');
				exit;
			}
			$tel=$_SESSION['tel'];
			$result = DB::findOne("select * from shop_user where tel = $tel");
			VIEW::assignarr($result);
			$sql="select * from shop_slide order by s_order";
			$res=DB::findAll($sql);
			VIEW::assign("slide",$res);	
		}
		public function __call($func="",$param="")
		{
			showmessage('页面不存在', 'index.php?c=user&m=index');
			exit;
		}
		public function index(){//
			$tel=$_SESSION['tel'];
			$sql="select * from shop_order left join shop_comment on shop_order.order_no=shop_comment.order_id where shop_order.tel=$tel";
			$list=DB::findAll($sql);
			VIEW::assign("order",$list);
			VIEW::display('user.html');					
		}
		public function useradddata(){
			$uid=$_GET['uid'];
			$wher="uid=".$uid;
			$list = array('name' =>$_POST['name'],'address' =>$_POST['address'],'email' =>$_POST['email'] );
			DB::update("shop_user",$list,$wher);
			showmessage('修改成功','index.php?c=user&m=index');
		}
		public function updatepassword(){
			$uid=$_GET['uid'];
			$lastpassword=encrypt($_POST['lastpassword']);
			$result = DB::findOne("select password from shop_user where uid = $uid");
			if($lastpassword == $result['password']){
				$password = encrypt($_POST['password']);
				$wher="uid=".$uid;
				$list = array('password' =>$password);
				DB::update("shop_user",$list,$wher);
				unset($_SESSION['tel']);
				showmessage('修改成功，请重新登陆！', 'index.php?c=index&m=logins');	
			}else{
				showmessage('修改失败','index.php?c=user&m=index');
			}
		}
		public function comment(){
			$nowtime=time();
			$arrayName = array('time' =>$nowtime);
			$orderdata=array_merge($_POST,$arrayName);
			DB::insert("shop_comment",$orderdata);
			showmessage('评论成功','index.php?c=user&m=index');
		}
		public function getorder(){
			$orderid=$_GET['order_no'];
			$sql="select * from shop_ordergood where order_no = $orderid";
			$res=DB::findAll($sql);
			echo json_encode($res);
			return;
		}
		public function delorder(){
			DB::del("shop_ordergood","order_no= {$_GET['order_no']}");
			DB::del("shop_order","order_no= {$_GET['order_no']}");
			showmessage('删除失败1','index.php?c=user&m=index');
		}
	}
?>