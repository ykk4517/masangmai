<?php /* Smarty version 3.1.27, created on 2015-12-09 15:11:16
         compiled from "D:\www\shop\tpl\home\gwc.html" */ ?>
<?php
/*%%SmartyHeaderCode:281095667d4143d7654_22630527%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bfb9ad71077bf6538290cc96d6ed1163a076125' => 
    array (
      0 => 'D:\\www\\shop\\tpl\\home\\gwc.html',
      1 => 1447678654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281095667d4143d7654_22630527',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667d4143f62c4_02111509',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667d4143f62c4_02111509')) {
function content_5667d4143f62c4_02111509 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '281095667d4143d7654_22630527';
Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'set.conf', null, 'local');?>
<!--侧边栏-->
<div class="am-u-md-2 am-hide-sm-only">
  <div class="am-panel-group"  data-am-sticky="{ top:50}" style="box-shadow: rgb(66, 152, 66) 0px 0px 5px;">
    <?php if ($_smarty_tpl->getConfigVariable('site_notice') != '') {?>
    <section class="am-panel am-panel-default">
      <div class="am-panel-hd">店铺公告</div>
      <div class="am-panel-bd">
        <p><?php echo $_smarty_tpl->getConfigVariable('site_notice');?>
</p>   
      </div>
    </section>
    <?php }?>
    <section class="am-panel am-panel-default">
        <div class="am-panel-hd"><span class="am-icon-shopping-cart"></span>&nbsp;&nbsp;购物车<span class="am-badge am-badge-warning am-round Allcount" style="position: absolute;">0</span></div>
          <ul id="cart" class="am-list" style="max-height:346px; overflow:auto;margin-bottom:0px;">

          </ul>
          <div style="width:100%;overflow:hidden;">
            <a class="am-btn am-btn-warning am-btn-sm am-u-sm-6" href="javascript:void(0);" id="delcart">全清空</a>
            <a class="am-btn am-btn-success am-btn-sm am-u-sm-6" id="goforcart" href="javascript:void(0);" data-am-modal="{ target: '#doc-modal-account' }">去结算</a>
          </div>
    </section>
  </div>
</div>
<!--侧边栏--><?php }
}
?>