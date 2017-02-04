<?php /* Smarty version 3.1.27, created on 2015-12-09 15:40:42
         compiled from "tpl\admin\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:86355667dafa02aa04_50665172%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c80e3fb42803f2b44cb2faa36ed4473503b114f' => 
    array (
      0 => 'tpl\\admin\\login.html',
      1 => 1449644192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86355667dafa02aa04_50665172',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667dafa10a6d0_67271246',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667dafa10a6d0_67271246')) {
function content_5667dafa10a6d0_67271246 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '86355667dafa02aa04_50665172';
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>管理登陆 | 马上买</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="Public/assets/i/favicon.png">
  <link rel="stylesheet" href="Public/assets/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>马上买-后台管理系统</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <form action="admin.php?c=index&m=login" method="post" class="am-form">
      <label for="text">用户名:</label>
      <input type="text" name="tel" id="tel" placeholder="输入注册手机号" value="15182639301">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password" id="password" value="xsdhy123456">
      <br />
      <div class="am-cf">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
      </div>
    </form>
    <hr>
    <p>© 2015 可曦, Inc. License.</p>
  </div>
</div>
</body>
</html><?php }
}
?>