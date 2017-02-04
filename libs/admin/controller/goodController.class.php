<?php
	class goodController{
		public function __construct(){
			session_start();
			if(!(isset($_SESSION['admintel']))&&(SUSE::$method!='login')){
				showmessage('请登录后在操作！', 'admin.php?c=index&m=login');
				exit;
			}
		}
		public function __call($func="",$param="")
		{
			showmessage('页面不存在', 'admin.php?c=good&m=index');
			exit;
		}
		public function index(){
			$sql="select * from shop_cate order by c_order";
			$res=DB::findAll($sql);
			VIEW::assign("cate",$res);
			$page=isset($_GET['p'])?intval($_GET['p']):1;
			$num=5;
			if($total=mysql_num_rows(DB::query("select * from shop_good"))){
			$pagenum=ceil($total/$num); 
			if($page>$pagenum || $page == 0){
		       showmessage('非法操作', 'admin.php?c=good&m=index');
		       exit;
			}
			$offset=($page-1)*$num;      
			$sql="select * from shop_good order by g_order limit $offset,$num";
			$res=DB::findAll($sql);
			VIEW::assign("good",$res);
			$pages="";
			if($pagenum>1){
				$allurl=$_SERVER['PHP_SELF']."?c=good&m=index";
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
			VIEW::display('goodlist.html');
		}
		public function addgood(){
			$sql="select * from shop_cate";
			$res=DB::findAll($sql);
			VIEW::assign("cate",$res);
			if(isset($_GET['gid'])){
				$res = DB::findone("select * from shop_good where gid= {$_GET['gid']}");
				VIEW::assignarr($res);
			}
			if($_POST){
				$fileInfo=$_FILES['img'];
				$allowExt=array('jpeg','jpg','png','gif');
				$ext=pathinfo($fileInfo['name'],PATHINFO_EXTENSION);
				if(!in_array($ext,$allowExt)){
					showmessage('请上传图片文件', 'admin.php?c=good&m=addgood');
					exit;
				}
				ORG('uploadfile');
				$upload = new UploadFile();
				$upload->maxSize  = 3145728 ;
				$upload->allowExts  = array('jpg','gif','png','jpeg');
				$upload->savePath =  './Public/Uploads/Good/';
				if(!$upload->upload()) {
				}else{
					$info =  $upload->getUploadFileInfo();
				}
				if(!empty($info)){
					$_POST['img'] = $info[0]['savename'];
				}
				$_POST['infor'] =stripslashes($_POST['infor']);
				if($_POST['gid']){
					DB::update("shop_good",$_POST,"gid ={$_POST['gid']}");
				}else{
					DB::insert("shop_good",$_POST);
				}
			}
			VIEW::display('addgood.html');
		}
		public function delgood(){
			if($_GET['gid']){
				$sql="select * from shop_good where gid={$_GET['gid']}";
				$res=DB::findone($sql);
				$img = $res['img'];
				unlink("./Public/Uploads/Good/".$img);
				DB::del("shop_good","gid= {$_GET['gid']}");
			}
		}
		public function delallgood(){
			$arr=explode(",",$_POST['delg']);
			foreach($arr as $key=>$value){
				if($value){
					$sql="select * from shop_good where gid={$_GET['gid']}";
					$res=DB::findone($sql);
					$img = $res['img'];
					unlink("./Public/Uploads/Good/".$img);
					DB::del("shop_good","gid= {$_GET['gid']}");
				}
			}
		}
		public function changegood(){
			$data =DB::update("shop_good",array("state"=>$_POST['state']),"gid ={$_POST['gid']}");
			echo json_encode($data);
		}
		public function changerecommend(){
			$data =DB::update("shop_good",array("is_recommend"=>$_POST['is_recommend']),"gid ={$_POST['gid']}");
			echo json_encode($data);
		}
	}
?>