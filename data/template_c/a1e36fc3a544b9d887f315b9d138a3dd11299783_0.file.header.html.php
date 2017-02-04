<?php /* Smarty version 3.1.27, created on 2015-12-09 14:52:26
         compiled from "D:\www\shop\tpl\admin\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:183605667cfaaea36f1_30124492%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1e36fc3a544b9d887f315b9d138a3dd11299783' => 
    array (
      0 => 'D:\\www\\shop\\tpl\\admin\\header.html',
      1 => 1447808755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183605667cfaaea36f1_30124492',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667cfaaeeb316_99940442',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667cfaaeeb316_99940442')) {
function content_5667cfaaeeb316_99940442 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '183605667cfaaea36f1_30124492';
Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'set.conf', null, 'local');?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>后台管理系统 | <?php echo $_smarty_tpl->getConfigVariable('site_name');?>
</title>
  <meta name="keywords" content="<?php echo $_smarty_tpl->getConfigVariable('site_keywords');?>
">
  <meta name="description" content="<?php echo $_smarty_tpl->getConfigVariable('site_description');?>
">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="Public/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="Public/assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->
<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>马上买</strong> <small>后台管理系统</small>
  </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{ target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
    <li><a href="index.php" target="_blank"><span class="am-icon-home"></span><span class="admin-fullText">前台首页</span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span>清理系统<span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="admin.php?c=index&m=clearallcache"><span class="am-icon-user"></span>清空缓存</a></li>
          <li><a href="admin.php?c=index&m=clearalltemp"><span class="am-icon-cog"></span>清空编译</a></li>
          <li><a href="admin.php?c=index&m=logout"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>
<div class="am-cf admin-main">
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="admin.php?c=index&m=index"><span class="am-icon-home"></span> 后台首页</a></li>
        <li><a href="admin.php?c=config&m=index"  style="color:#333;"><span class="am-icon-wrench"></span> 站点设置</a></li>
        <li><a href="admin.php?c=cate&m=index"  style="color:#333;"><span class="am-icon-sitemap"></span> 商品分类</a></li>
        <li><a href="admin.php?c=good&m=index"  style="color:#333;"><span class="am-icon-list"></span> 商品列表</a></li>
        <li><a href="admin.php?c=order&m=index"  style="color:#333;"><span class="am-icon-file"></span> 订单列表</a></li>
        <li><a href="admin.php?c=user&m=index"  style="color:#333;"><span class="am-icon-users"></span> 会员列表</a></li>
        <li><a href="admin.php?c=slide&m=index"  style="color:#333;"><span class="am-icon-image"></span> 首页幻灯</a></li>
        <li><a href="admin.php?c=message&m=index"  style="color:#333;"><span class="am-icon-file-text-o"></span> 公告列表</a></li>
        <li><a href="admin.php?c=comment&m=index"  style="color:#333;"><span class="am-icon-comments-o"></span> 评论列表</a></li>
        <li><a href="admin.php?c=index&m=logout"><span class="am-icon-sign-out"></span> 注销</a></li>
      </ul>
      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> 马上买</p>
          <p>Welcome to the 马上买</p>
        </div>
      </div>
    </div>
  </div><?php }
}
?>