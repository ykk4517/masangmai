<?php
	class slideController{
		public function __construct(){
			session_start();
			if(!(isset($_SESSION['admintel']))&&(SUSE::$method!='login')){
				showmessage('请登录后在操作！', 'admin.php?c=index&m=login');
				exit;
			}
		}
		public function __call($func="",$param="")
		{
			showmessage('页面不存在', 'admin.php?c=slide&m=index');
			exit;
		}
		public function index(){
			$sql="select * from shop_slide order by s_order";
			$res=DB::findAll($sql);
			VIEW::assign("slide",$res);
			VIEW::display('slide.html');
		}
		public function addslide(){
			$fileInfo=$_FILES['imgurl'];
			$allowExt=array('jpeg','jpg','png','gif');
			$ext=pathinfo($fileInfo['name'],PATHINFO_EXTENSION);
			if(!in_array($ext,$allowExt)){
				showmessage('请上传图片文件', 'admin.php?c=slide&m=index');
				exit;
			}
			ORG('uploadfile');
			$upload = new UploadFile();
			$upload->maxSize  = 3145728 ;
			$upload->allowExts  = array('jpg','gif','png','jpeg');
			$upload->savePath =  './Public/Uploads/Slide/';
			if(!$upload->upload()) {
			}else{
				$info =  $upload->getUploadFileInfo();
			}
			if(!empty($info)){
				$_POST['imgurl'] = $info[0]['savename'];
			}
			DB::insert("shop_slide",$_POST);
			showmessage('成功','admin.php?c=slide&m=index');
		}
		public function delslide(){
			$sql="select * from shop_slide where id={$_GET['id']}";
			$res=DB::findone($sql);
			$img = $res['imgurl'];
			unlink("./Public/Uploads/Slide/".$img);
			DB::del("shop_slide","id= {$_GET['id']}");
			showmessage('成功','admin.php?c=slide&m=index');
		}
	}
?>