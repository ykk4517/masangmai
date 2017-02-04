<?php /* Smarty version 3.1.27, created on 2015-12-09 15:11:16
         compiled from "D:\www\shop\tpl\home\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:319915667d4142c0651_22022233%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '653da7d7c4da876eef1e46c3a63e391b388a584b' => 
    array (
      0 => 'D:\\www\\shop\\tpl\\home\\header.html',
      1 => 1447831246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319915667d4142c0651_22022233',
  'variables' => 
  array (
    'pagetitle' => 0,
    'uid' => 0,
    'slide' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667d41433ee44_46325907',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667d41433ee44_46325907')) {
function content_5667d41433ee44_46325907 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '319915667d4142c0651_22022233';
Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'set.conf', null, 'local');?>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagetitle']->value)===null||$tmp==='' ? '' : $tmp);?>
-<?php echo $_smarty_tpl->getConfigVariable('site_name');?>
</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="<?php echo $_smarty_tpl->getConfigVariable('site_keywords');?>
">
  <meta name="description" content="<?php echo $_smarty_tpl->getConfigVariable('site_description');?>
">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="stylesheet" href="Public/assets/css/amazeui.min.css"/>
  <?php echo '<script'; ?>
 src="Public/assets/js/gwc.js"><?php echo '</script'; ?>
>
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="Public/assets/js/amazeui.ie8polyfill.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!-->
  <?php echo '<script'; ?>
 src="Public/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
  <!--<![endif]-->
  <?php echo '<script'; ?>
 src="Public/assets/js/amazeui.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<header data-am-widget="header" class="am-topbar am-topbar-fixed-top">
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <a href="index.php"><?php echo $_smarty_tpl->getConfigVariable('site_name');?>
</a>
    </h1>
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only" data-am-offcanvas="{ target: '#doc-oc-demo2', effect: 'push'}">
      <span class="am-sr-only">导航切换</span> 
      <span class="am-icon-bars"></span>
    </button>
    <div class="am-collapse am-topbar-collapse" id="collapse-head">
      <ul class="am-nav am-nav-pills am-topbar-nav">
        <li><a href="index.php">首页</a></li>
        <li><a href="index.php?c=index&m=messagelist">公告</a></li>
        <li><a href="index.php?c=index&m=map">地图</a></li>
      </ul>
      <?php if ($_smarty_tpl->tpl_vars['uid']->value == NULL) {?>
        <div class="am-topbar-right">
        <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"  data-am-modal="{ target:'#doc-modal-register' }"><span class="am-icon-pencil"></span> 注册</button>
      </div>
      <div class="am-topbar-right">
        <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"  data-am-modal="{ target:'#doc-modal-login' }"><span class="am-icon-user"></span> 登录</button>
      </div>
      <?php } else { ?>
      <div class="am-topbar-right">
        <a class="am-btn am-btn-primary am-topbar-btn am-btn-sm" href="index.php?c=index&m=logout"><span class="am-icon-user"></span> 退出</a>
      </div>
        <div class="am-topbar-right">
        <a class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"  href="index.php?c=user&m=index"><span class="am-icon-pencil"></span> 用户中心</a>
      </div>
      <?php }?>
    </div>
  </div>
</header>
<!--轮播图片-->
<div class="sliderwidth">
<?php if ($_smarty_tpl->tpl_vars['slide']->value != '') {?>
<div data-am-widget="slider" class="am-slider am-slider-a1">
  <ul class="am-slides huandeng" style="overflow:hidden">
  <?php
$_from = $_smarty_tpl->tpl_vars['slide']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
  <li>
  <a href="<?php echo $_smarty_tpl->tpl_vars['s']->value['url'];?>
" style="background-image:url(./Public/Uploads/Slide/<?php echo $_smarty_tpl->tpl_vars['s']->value['imgurl'];?>
);background-position:50%;width:100%;display:block;height:250px;"></a>
  </li>
  <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
  </ul>
</div>
<?php }?>
</div>
<hr><?php }
}
?>