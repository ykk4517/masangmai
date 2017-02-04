<?php /* Smarty version 3.1.27, created on 2015-12-09 15:41:57
         compiled from "tpl\admin\goodlist.html" */ ?>
<?php
/*%%SmartyHeaderCode:159195667db45a6a3c2_58787667%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed56f3f6ff55ccdd174943d6d816de4ea334d1b4' => 
    array (
      0 => 'tpl\\admin\\goodlist.html',
      1 => 1447833891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159195667db45a6a3c2_58787667',
  'variables' => 
  array (
    'cate' => 0,
    'c' => 0,
    'good' => 0,
    'g' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667db45c23895_60340927',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667db45c23895_60340927')) {
function content_5667db45c23895_60340927 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '159195667db45a6a3c2_58787667';
echo $_smarty_tpl->getSubTemplate ("tpl/admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript">
goodsflag = 0;
function selectAll() //全选 
{ 
  var objs = document.getElementsByName('delgoods'); 
  var i; 
  if(goodsflag == 0){
    for(i = 0; i < objs.length; i++) 
    { 
      if(objs[i].type == "checkbox") 
      { 
        objs[i].checked = true; 
      } 
    }
  }else{
    for(i = 0; i < objs.length; i++) 
    { 
      if(objs[i].type == "checkbox") 
      { 
        objs[i].checked = false; 
      } 
    }
  } 
  goodsflag = (goodsflag+1)%2;
} 
function changeValue(){
  var objs = document.getElementsByName('delgoods'); 
  var delg = document.getElementById('delg'); 
  var i,str=''; 
  for(i = 0; i < objs.length; i++) 
  { 
    if(objs[i].type == "checkbox") 
    { 
      if(objs[i].checked == true){
        str += objs[i].value+",";
      }
    } 
  }
  //alert(str);
    delg.value = str;
    $("form[name=delall]").submit();
  }
<?php echo '</script'; ?>
>
<div class="admin-content">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商品列表</strong></div>
  </div>
  <div class="am-g">
    <div class="am-u-sm-12 am-u-md-6">
      <div class="am-btn-toolbar">
        <div class="am-btn-group am-btn-group-xs">
          <a type="button" class="am-btn am-btn-default" href="admin.php?c=good&m=addgood"><span class="am-icon-plus"></span> 新增</a>
        </div>
      </div>
    </div>
    <div class="am-u-sm-12 am-u-md-3">
      <div class="am-form-group">
        <select>
          <option>全部商品</option>
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
          <option><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</option>
          <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
        </select>
      </div>
    </div>
  </div>
  <div class="am-g">
    <div class="am-u-sm-12">
      <form action="admin.php?m=Good&a=delallgood" method="post" name="delall" class="am-form">
        <table class="am-table am-table-striped am-table-hover table-main">
          <thead>
            <tr>
              <th class="table-check"><input type="checkbox" onclick="selectAll();"/></th><input type="hidden" id="delg" name="delg"/>
              <th class="table-id">图片</th>
              <th class="table-title">商品名称</th>
              <th class="table-type">价格</th>
              <th class="table-author am-hide-sm-only">分类</th>
              <th class="table-date am-hide-sm-only">排序</th>
              <th class="table-date am-hide-sm-only">状态</th>
              <th class="table-date am-hide-sm-only">销量</th>
              <th class="table-set">操作</th>
            </tr>
        </thead>
        <tbody>
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
          <tr>
            <td><label class="am-checkbox"><input type="checkbox" name="delgoods"  value="<?php echo $_smarty_tpl->tpl_vars['g']->value['gid'];?>
"  data-am-ucheck/></label></td>
            <td><img src="./Public/Uploads/Good/<?php echo $_smarty_tpl->tpl_vars['g']->value['img'];?>
" width="100px" height="100px"/></td>
            <td><?php echo $_smarty_tpl->tpl_vars['g']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['g']->value['price'];?>
</td>
            <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['g']->value['cid'];?>
</td>
            <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['g']->value['g_order'];?>
</td>
            <td class="am-hide-sm-only">
              <div id="good_<?php echo $_smarty_tpl->tpl_vars['g']->value['gid'];?>
">
              <?php ob_start();
echo $_smarty_tpl->tpl_vars['g']->value['state'];
$_tmp1=ob_get_clean();
if ($_tmp1 == 1) {?>
              <a class="am-badge am-badge-success am-radius" onclick="changegood('<?php echo $_smarty_tpl->tpl_vars['g']->value['gid'];?>
','2');">已上架</a>
              <?php } else { ?>
              <a class="am-badge am-badge-danger am-radius" onclick="changegood('<?php echo $_smarty_tpl->tpl_vars['g']->value['gid'];?>
','1');">已下架</a>
              <?php }?>
              </div>
              <div id="goodre_<?php echo $_smarty_tpl->tpl_vars['g']->value['gid'];?>
">
              <?php ob_start();
echo $_smarty_tpl->tpl_vars['g']->value['is_recommend'];
$_tmp2=ob_get_clean();
if ($_tmp2 == 1) {?>
              <a class="am-badge am-badge-success am-radius" onclick="changerecommend('<?php echo $_smarty_tpl->tpl_vars['g']->value['gid'];?>
','0');">已推荐</a>
              <?php } else { ?>
              <a class="am-badge am-badge-danger am-radius" onclick="changerecommend('<?php echo $_smarty_tpl->tpl_vars['g']->value['gid'];?>
','1');">未推荐</a>
              <?php }?>
              </div>
            </td>
            <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['g']->value['base_num'];?>
</td>
            <td>
              <div class="am-btn-toolbar">
                <div class="am-btn-group am-btn-group-xs">
                  <a class="am-btn am-btn-default am-btn-xs am-text-secondary" href="admin.php?c=good&m=addgood&gid=<?php echo $_smarty_tpl->tpl_vars['g']->value['gid'];?>
"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                  <a class="am-btn am-btn-default am-btn-xs" href="admin.php?c=good&m=delgood&gid=<?php echo $_smarty_tpl->tpl_vars['g']->value['gid'];?>
" onClick="if(confirm('删除商品,是否继续执行?')==false)return false;"><span class="am-icon-trash-o"></span> 删除</a>
                  <a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" href="index.php?c=index&m=good&gid=<?php echo $_smarty_tpl->tpl_vars['g']->value['gid'];?>
" target="_blank"><span class="am-icon-eye"></span> 查看</a>
                </div>
              </div>
            </td>
          </tr>
          <?php
$_smarty_tpl->tpl_vars['g'] = $foreach_g_Sav;
}
?>
        </tbody>
      </table>
      <a  class="am-btn am-btn-default am-btn-xs am-text-danger" onClick="if(confirm('删除选中商品,是否继续执行?')==false){ return false;}else{ changeValue();}"><span class="am-icon-trash-o"></span> 删除选中商品</a>
      </form>
      <div class="am-cf">
        <div class="am-fr">
          <ul class="am-pagination">
              <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

          </ul>
        </div>
      </div>
        <hr />
        <p>注：.....</p>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
function changegood(gid,state){
   $.post("admin.php?c=good&m=changegood", { "gid": gid,"state":state},
     function(data){
        if(state==1){
         $('#good_'+gid).html("<a class=\"am-badge am-badge-success am-radius\" onclick=\"changegood('"+gid+"','2');\">已上架</a>"); 
      }else{
         $('#good_'+gid).html("<a class=\"am-badge am-badge-danger am-radius\" onclick=\"changegood('"+gid+"','1');\">已下架</a>"); 
      }
   }, "json");    
}
function changerecommend(gid,is_recommend){
   $.post("admin.php?c=good&m=changerecommend", { "gid": gid,"is_recommend":is_recommend},
     function(data){
        if(is_recommend==1){
         $('#goodre_'+gid).html("<a class=\"am-badge am-badge-success am-radius\" onclick=\"changerecommend('"+gid+"','0');\">已推荐</a>"); 
      }else{
         $('#goodre_'+gid).html("<a class=\"am-badge am-badge-danger am-radius\" onclick=\"changerecommend('"+gid+"','1');\">未推荐</a>"); 
      }
   }, "json");    
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("tpl/admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>