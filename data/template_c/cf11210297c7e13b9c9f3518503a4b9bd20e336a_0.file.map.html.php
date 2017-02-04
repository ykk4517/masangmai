<?php /* Smarty version 3.1.27, created on 2015-12-09 15:42:48
         compiled from "tpl\home\map.html" */ ?>
<?php
/*%%SmartyHeaderCode:205875667db78b01fa4_75642913%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf11210297c7e13b9c9f3518503a4b9bd20e336a' => 
    array (
      0 => 'tpl\\home\\map.html',
      1 => 1447737081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205875667db78b01fa4_75642913',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667db78c57666_43487489',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667db78c57666_43487489')) {
function content_5667db78c57666_43487489 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '205875667db78b01fa4_75642913';
echo $_smarty_tpl->getSubTemplate ("tpl/home/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagetitle'=>'店铺地址'), 0);
?>

<div class="am-g">
<?php echo $_smarty_tpl->getSubTemplate ("tpl/home/cate.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php  Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'set.conf', null, 'local');?>
<div class="am-u-md-8 am-g-fixed">
<div data-am-widget="map" class="am-map am-map-default" data-name="<?php echo $_smarty_tpl->getConfigVariable('site_name');?>
"
data-address="<?php echo $_smarty_tpl->getConfigVariable('site_address');?>
" data-longitude="<?php echo $_smarty_tpl->getConfigVariable('site_mapl');?>
" data-latitude="<?php echo $_smarty_tpl->getConfigVariable('site_mapr');?>
" data-scaleControl="true" data-zoomControl="true" data-setZoom="14" data-icon="http://amuituku.qiniudn.com/mapicon.png">
<div id="bd-map"></div>
</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("tpl/home/gwc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("tpl/home/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>