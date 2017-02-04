<?php /* Smarty version 3.1.27, created on 2015-12-09 15:42:46
         compiled from "tpl\home\messagelist.html" */ ?>
<?php
/*%%SmartyHeaderCode:262905667db76296401_91036883%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a43c3869c6d0f665280e1077ce0d87d68e04f1c' => 
    array (
      0 => 'tpl\\home\\messagelist.html',
      1 => 1447737207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262905667db76296401_91036883',
  'variables' => 
  array (
    'message' => 0,
    'm' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667db7643b171_70709021',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667db7643b171_70709021')) {
function content_5667db7643b171_70709021 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\www\\shop\\suseframe\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '262905667db76296401_91036883';
echo $_smarty_tpl->getSubTemplate ("tpl/home/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>'店铺公告'), 0);
?>

<div class="am-g am-lg-fixed">
  <div class="am-u-lg-8 am-u-lg-centered" style="padding:0">
	<h1 class="title-hide" style="color:#009f3c; text-align:center; border-bottom: solid #009f3c 3px;">店内公告</h1>
    <article class="blog-main">
    	<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
		<ul class="am-list am-list-static">
		  <?php
$_from = $_smarty_tpl->tpl_vars['message']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['m']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
$foreach_m_Sav = $_smarty_tpl->tpl_vars['m'];
?>
		     <li><a href="index.php?c=index&m=message&id=<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
" style="width:100%;"><?php echo $_smarty_tpl->tpl_vars['m']->value['title'];?>
&nbsp;&nbsp;
		     <span style="float:right;color:#999999; font-weight:normal;margin-right:10px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value['time'],"%Y-%m-%e,%H:%M:%S");?>
</span>
		     </a></li>
		  <?php
$_smarty_tpl->tpl_vars['m'] = $foreach_m_Sav;
}
?>
		</ul>
		<ul class="am-pagination blog-pagination" style="text-align: right;">
		  <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

		</ul>
		<?php } else { ?>
		<ul>当前没有文章</ul>
		<?php }?>
   </article>
   </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("tpl/home/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>