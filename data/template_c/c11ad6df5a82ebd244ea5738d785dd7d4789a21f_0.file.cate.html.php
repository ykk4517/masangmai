<?php /* Smarty version 3.1.27, created on 2015-12-09 15:11:16
         compiled from "D:\www\shop\tpl\home\cate.html" */ ?>
<?php
/*%%SmartyHeaderCode:100845667d414373075_53999017%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c11ad6df5a82ebd244ea5738d785dd7d4789a21f' => 
    array (
      0 => 'D:\\www\\shop\\tpl\\home\\cate.html',
      1 => 1447808951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100845667d414373075_53999017',
  'variables' => 
  array (
    'cate' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667d4143b8854_77278107',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667d4143b8854_77278107')) {
function content_5667d4143b8854_77278107 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '100845667d414373075_53999017';
?>
<!--侧边栏-->
<div class="am-u-md-2 am-hide-sm-only" id="cate">
  <div class="am-panel-group"  data-am-sticky="{ top:50}" style="box-shadow: rgb(66, 152, 66) 0px 0px 5px;">
    <section class="am-panel am-panel-default">
      <div class="am-panel-hd">商品分类</div>
      <ul class="am-list">
      <?php if ($_smarty_tpl->tpl_vars['cate']->value != '') {?>
      <?php
$_from = $_smarty_tpl->tpl_vars['cate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
        <li><a href="index.php?c=index&m=goodcate&gid=<?php echo $_smarty_tpl->tpl_vars['c']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</a></li>
      <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
      <?php } else { ?>
      当前没有任何分类
      <?php }?>
      </ul>
    </section>
  </div>
</div>
<!--侧边栏-->

<!-- 侧边栏内容手机版 -->
<div id="doc-oc-demo2" class="am-offcanvas">
  <div class="am-offcanvas-bar">
     <section class="am-panel am-panel-default">
      <div class="am-panel-hd">商品分类</div>
      <ul class="am-list">
      <?php if ($_smarty_tpl->tpl_vars['cate']->value != '') {?>
      <?php
$_from = $_smarty_tpl->tpl_vars['cate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
        <li><a href="index.php?c=index&m=goodcate&gid=<?php echo $_smarty_tpl->tpl_vars['c']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</a></li>
      <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
      <?php } else { ?>
      当前没有任何分类
      <?php }?>
      </ul>
    </section>
  </div>
</div><?php }
}
?>