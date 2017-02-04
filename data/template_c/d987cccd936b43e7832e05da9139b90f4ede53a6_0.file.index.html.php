<?php /* Smarty version 3.1.27, created on 2015-12-09 15:11:16
         compiled from "tpl\home\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:125345667d414120c83_06738980%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd987cccd936b43e7832e05da9139b90f4ede53a6' => 
    array (
      0 => 'tpl\\home\\index.html',
      1 => 1447760666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125345667d414120c83_06738980',
  'variables' => 
  array (
    'good' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667d414296e74_53699249',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667d414296e74_53699249')) {
function content_5667d414296e74_53699249 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '125345667d414120c83_06738980';
echo $_smarty_tpl->getSubTemplate ("tpl/home/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>'首页'), 0);
?>

<div class="am-g">
<?php echo $_smarty_tpl->getSubTemplate ("tpl/home/cate.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="am-u-md-8 am-g-fixed">
<ul data-am-widget="gallery" class="am-gallery am-avg-sm-2 am-avg-md-3 am-avg-lg-4 am-gallery-bordered"> 
<?php if ($_smarty_tpl->tpl_vars['good']->value != '') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['good']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$foreach_g_Sav = $_smarty_tpl->tpl_vars['g'];
?>
<li> 
  <div class="am-gallery-item good_infor">
    <a href="index.php?c=index&m=good&gid=<?php echo $_smarty_tpl->tpl_vars['g']->value['gid'];?>
">
    <div class="good_img">
      <img src="./Public/Uploads/Good/<?php echo $_smarty_tpl->tpl_vars['g']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['name'];?>
" id="img_<?php echo $_smarty_tpl->tpl_vars['g']->value['img'];?>
"/>
    </div>
    </a>
    <div class="am-gallery-desc">
      <div style="padding:0 10px;">
        <h3 class="am-gallery-title"><strong><?php echo $_smarty_tpl->tpl_vars['g']->value['name'];?>
</strong></h3>
        <div style="overflow:hidden;margin-bottom:10px;">
          <span class="am-u-sm-5" style="padding:0;">¥<?php echo $_smarty_tpl->tpl_vars['g']->value['price'];?>
</span>
          <span class="am-u-sm-7" style="padding:0; text-align:right;padding-right:10px;">
          <span style="font-size:12px; color:#888888;">销售:&nbsp;&nbsp;</span><?php echo $_smarty_tpl->tpl_vars['g']->value['base_num'];?>

          </span>
        </div>
      </div>
      <a href="javascript:void(0);" class="am-btn am-btn-primary" onclick="addCart('<?php echo $_smarty_tpl->tpl_vars['g']->value['gid'];?>
','<?php echo $_smarty_tpl->tpl_vars['g']->value['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['g']->value['price'];?>
');" style="width:100%">加入购物车</a>
    </div>
  </div>
</li>
<?php
$_smarty_tpl->tpl_vars['g'] = $foreach_g_Sav;
}
?>
<?php } else { ?>
还没有商品哦
<?php }?>
</ul>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("tpl/home/gwc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("tpl/home/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>