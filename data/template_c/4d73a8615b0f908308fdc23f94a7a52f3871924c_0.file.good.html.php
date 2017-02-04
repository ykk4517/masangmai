<?php /* Smarty version 3.1.27, created on 2015-12-09 15:12:28
         compiled from "tpl\home\good.html" */ ?>
<?php
/*%%SmartyHeaderCode:62095667d45c7795b2_52308139%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d73a8615b0f908308fdc23f94a7a52f3871924c' => 
    array (
      0 => 'tpl\\home\\good.html',
      1 => 1447775436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62095667d45c7795b2_52308139',
  'variables' => 
  array (
    'name' => 0,
    'img' => 0,
    'gid' => 0,
    'price' => 0,
    'base_num' => 0,
    'infor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667d45c8b0764_95552088',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667d45c8b0764_95552088')) {
function content_5667d45c8b0764_95552088 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '62095667d45c7795b2_52308139';
echo $_smarty_tpl->getSubTemplate ("tpl/home/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>$_smarty_tpl->tpl_vars['name']->value), 0);
?>

<div class="am-g">
<?php echo $_smarty_tpl->getSubTemplate ("tpl/home/cate.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="am-u-md-8 am-g-fixed">
    <div class="am-u-md-12">
      <div class="am-u-lg-5">
        <p><img src="./Public/Uploads/Good/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" id="img_<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
" width="100%" style="box-shadow: 0px 0px 8px #429842;"/></p>
      </div>
      <div class="am-u-lg-5">
        <h5><a href="#"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></h5>
        <div style="border-bottom: dotted #cccccc 1px;border-top:dotted #cccccc 1px;">
          <div class="am-u-sm-5"><span class="pd_product-price-yen">价格:&nbsp;&nbsp;</span></div>:
          <div class="am-u-sm-5">¥&nbsp;&nbsp;<strong class="pd_product-price-num" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</strong></div>
        </div>
        <br>
        <div style="border-bottom: dotted #cccccc 1px;border-top:dotted #cccccc 1px;">
          <div class="am-u-sm-5">销售:&nbsp;&nbsp;<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['base_num']->value;?>
</span></div>;
        </div>
        <br>
        <div>
          <div class="am-u-sm-5"><a href="javascript:void(0);" class="am-btn am-btn-primary" onclick="addCart('<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
');">加入购物车</a></div>
        </div>
      </div>
    </div>
    <div class="am-u-lg-12">
    <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" style="margin:0; margin-bottom:10px; margin-top:20px;">
      <h2 class="am-titlebar-title" style="border-bottom:solid #0e90d2 1px; width:100%;">图文详情</h2>
    </div>
    </div>
    <div class="am-u-lg-12">
        <?php echo $_smarty_tpl->tpl_vars['infor']->value;?>

    </div>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ("tpl/home/gwc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("tpl/home/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>