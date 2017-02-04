<?php /* Smarty version 3.1.27, created on 2015-12-09 15:42:18
         compiled from "tpl\admin\config.html" */ ?>
<?php
/*%%SmartyHeaderCode:318045667db5ac69a28_04181050%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '127d79248f38d24fc95a12086fc6df67f4ebaf2a' => 
    array (
      0 => 'tpl\\admin\\config.html',
      1 => 1447808657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318045667db5ac69a28_04181050',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667db5ae014f0_46191524',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667db5ae014f0_46191524')) {
function content_5667db5ae014f0_46191524 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '318045667db5ac69a28_04181050';
echo $_smarty_tpl->getSubTemplate ("tpl/admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php  Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'set.conf', null, 'local');?>
<div class="admin-content">
<form class="am-form am-form-horizontal" method="post" action="admin.php?c=config&m=savesetting">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">网站设置</strong> </div>
  </div>
  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">网站配置</a></li>
    </ul>
    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
          <div class="am-g am-margin-top">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              网站名称：
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text"  name="site_name" id="doc-ipt-name-1" value="<?php echo $_smarty_tpl->getConfigVariable('site_name');?>
">
            </div>
          </div>
          <div class="am-g am-margin-top">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              网站关键词：
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text"  name="site_keywords" id="doc-ipt-name-1" value="<?php echo $_smarty_tpl->getConfigVariable('site_keywords');?>
">
            </div>
            <div class="am-u-sm-12 am-u-md-6">利于SEO优化，提高网站收录和排名</div>
          </div>
          <div class="am-g am-margin-top">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              网站描述：
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text"  name="site_description" id="doc-ipt-name-1" value="<?php echo $_smarty_tpl->getConfigVariable('site_description');?>
">
            </div>
            <div class="am-u-sm-12 am-u-md-6">利于SEO优化，提高网站收录和排名</div>
          </div>
          <div class="am-g am-margin-top">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              网站ICP号：
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text"  name="site_icp" id="doc-ipt-name-1" value="<?php echo $_smarty_tpl->getConfigVariable('site_icp');?>
">
            </div>
          </div>
          <div class="am-g am-margin-top">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              游客下单：
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="radio"  name="is_ghost" value='1' <?php ob_start();
echo $_smarty_tpl->getConfigVariable('is_ghost');
$_tmp1=ob_get_clean();
if ($_tmp1 == 1) {?>checked="checked"<?php }?>>&nbsp;&nbsp;开启&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio"  name="is_ghost" value='0' <?php ob_start();
echo $_smarty_tpl->getConfigVariable('is_ghost');
$_tmp2=ob_get_clean();
if ($_tmp2 == 0) {?>checked="checked"<?php }?>>&nbsp;&nbsp;关闭
            </div>
            <div class="am-u-sm-12 am-u-md-6">开启表示允许游客下单</div>
          </div>
          <div class="am-g am-margin-top">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              最低配送价格：
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text"  name="site_price" id="doc-ipt-name-1" value="<?php echo $_smarty_tpl->getConfigVariable('site_price');?>
">
            </div>
            <div class="am-u-sm-12 am-u-md-6">低于此价格无法提交订单</div>
          </div>
          <div class="am-g am-margin-top">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              店铺公告：
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <textarea name="site_notice" cols="" rows=""><?php echo $_smarty_tpl->getConfigVariable('site_notice');?>
</textarea>
            </div>
          </div>
          <div class="am-g am-margin-top">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              客服电话：
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text"  name="site_tel" id="doc-ipt-name-1" value="<?php echo $_smarty_tpl->getConfigVariable('site_tel');?>
">
            </div>
          </div>
          <div class="am-g am-margin-top">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              店铺地址：
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text"  name="site_address" id="doc-ipt-name-1" value="<?php echo $_smarty_tpl->getConfigVariable('site_address');?>
">
            </div>
          </div>
          <div class="am-g am-margin-top">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              地图坐标：
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text"  name="site_mapl" id="doc-ipt-name-1" value="<?php echo $_smarty_tpl->getConfigVariable('site_mapl');?>
">
              <input type="text"  name="site_mapr" id="doc-ipt-name-1" value="<?php echo $_smarty_tpl->getConfigVariable('site_mapr');?>
">
            </div>
            <div class="am-u-sm-12 am-u-md-6">点击获取百度<a href="http://api.map.baidu.com/lbsapi/getpoint/index.html" target="_blank">地图坐标</a></div>
          </div>
      </div>
    </div>
  </div>
  <div class="am-margin">
    <button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
  </div>
  </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("tpl/admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>