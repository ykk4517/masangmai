<?php /* Smarty version 3.1.27, created on 2015-12-09 14:52:26
         compiled from "tpl\admin\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:230675667cfaad7e426_62793756%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '960134157fa259e4e66125a4a4ef37297a26b6d9' => 
    array (
      0 => 'tpl\\admin\\index.html',
      1 => 1447831936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230675667cfaad7e426_62793756',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667cfaae80492_78625255',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667cfaae80492_78625255')) {
function content_5667cfaae80492_78625255 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '230675667cfaad7e426_62793756';
echo $_smarty_tpl->getSubTemplate ("tpl/admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="admin-content">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>关于我们</small></div>
  </div>
  <ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
    <li><a href="admin.php?c=config&m=index" class="am-text-success"><span class="am-icon-btn am-icon-file-text"></span><br/>站点设置</a></li>
    <li><a href="admin.php?c=good&m=index" class="am-text-warning"><span class="am-icon-btn am-icon-briefcase"></span><br/>商品列表</a></li>
    <li><a href="admin.php?c=order&m=index" class="am-text-danger"><span class="am-icon-btn am-icon-recycle"></span><br/>订单列表</a></li>
    <li><a href="admin.php?c=user&m=index" class="am-text-secondary"><span class="am-icon-btn am-icon-user-md"></span><br/>会员列表</a></li>
  </ul>
  <hr/>
  <div class="am-g">
    <div class="am-u-sm-12 am-u-sm-centered">
      <h2>马上买·网上超市系统</h2>
      <p>
      马上买，是旨在为各微小企业或店铺提供网上销售渠道的电子商务网站。<br>
      与其他电商网站相比，我们作品的优点有：<br>
      页面简介大方、购物流程方便快捷、易操作与管理。
      </p>
      <hr/>
    </div>
    <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
      <h3>团队介绍</h3>
      <p>唐川：擅长PHP语言，能够熟练在WAMP、LAMP系统下熟练操作；熟悉php各类设计模式，理解MVC框架思想，熟练使用thinkPHP框架、Smarty模板技术。</p>
      <p>梁景堂：自学DreamWeaver，JavaScript,DOM编程,对JQuery，JQuery UI ，bootstrap有一定的了解，能够做出比较简单的网页，熟悉html,css。</p>
      <p>陈汉：熟悉各类常用算法与数据结构、C\C++语言</p>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("tpl/admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>