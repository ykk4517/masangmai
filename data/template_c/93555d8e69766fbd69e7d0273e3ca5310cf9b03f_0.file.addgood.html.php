<?php /* Smarty version 3.1.27, created on 2016-02-14 13:16:51
         compiled from "tpl\admin\addgood.html" */ ?>
<?php
/*%%SmartyHeaderCode:2396756c00dc3dca0a9_60252396%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93555d8e69766fbd69e7d0273e3ca5310cf9b03f' => 
    array (
      0 => 'tpl\\admin\\addgood.html',
      1 => 1447833839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2396756c00dc3dca0a9_60252396',
  'variables' => 
  array (
    'name' => 0,
    'img' => 0,
    'cate' => 0,
    'c' => 0,
    'cid' => 0,
    'price' => 0,
    'base_num' => 0,
    'infor' => 0,
    'g_order' => 0,
    'state' => 0,
    'is_recommend' => 0,
    'gid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c00dc400b401_15214299',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c00dc400b401_15214299')) {
function content_56c00dc400b401_15214299 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2396756c00dc3dca0a9_60252396';
echo $_smarty_tpl->getSubTemplate ("tpl/admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link href="/ueditor/themes/default/css/ueditor.css" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 src="/ueditor/ueditor.config.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ueditor/ueditor.all.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
//下面用于图片上传预览功能
function setImagePreview(avalue) {
    var docObj=document.getElementById("doc");
    var imgObjPreview=document.getElementById("preview");
    if(docObj.files &&docObj.files[0])
    {
        //火狐下，直接设img属性
        imgObjPreview.style.display = 'block';
        imgObjPreview.style.width = '66%';
        imgObjPreview.style.height = '66%';
        //imgObjPreview.src = docObj.files[0].getAsDataURL();
        //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
        imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
    }else{
        //IE下，使用滤镜
        docObj.select();
        var imgSrc = document.selection.createRange().text;
        var localImagId = document.getElementById("localImag");
        //必须设置初始大小
        localImagId.style.width = "66%";
        localImagId.style.height = "66%";
        //图片异常的捕捉，防止用户修改后缀来伪造图片
        try{
            localImagId.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
            localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
        }catch(e){
            alert("您上传的图片格式不正确，请重新选择!");
            return false;
        }
        imgObjPreview.style.display = 'none';
        document.selection.empty();
    }
    return true;
}
<?php echo '</script'; ?>
>
<div class="admin-content">
<form class="am-form" action="admin.php?c=good&m=addgood" method="post" id="gform" enctype="multipart/form-data" data-am-validator>
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">发布/编辑商品</strong> </div>
  </div>
  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">基本信息</a></li>
      <li><a href="#tab2">详细描述</a></li>
      <li><a href="#tab3">其他选项</a></li>
    </ul>
    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
        <div class="am-g am-margin-top">
          <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
            商品名称
          </div>
          <div class="am-u-sm-8 am-u-md-4">
            <input type="text" class="am-input-sm" name="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
" required>
          </div>
          <div class="am-u-sm-12 am-u-md-6">*必填</div>
        </div>
        <div class="am-g am-margin-top">
          <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
            商品照片
          </div>
          <div class="am-u-sm-8 am-u-md-4">
            <input type="file" name="img" id="doc" onchange="javascript:setImagePreview();" required>
            <img id="preview" src="./Public/Uploads/Good/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
">
          </div>
          <div class="am-u-sm-12 am-u-md-6">*必填</div>
        </div>
        <div class="am-g am-margin-top">
          <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">请选择分类</div required>
          <div class="am-u-sm-8 am-u-md-10">
            <select name="cid" id="cid" required>
              <option value="">请选择分类</option>
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
              <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['cid'];?>
" <?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['cid']->value)===null||$tmp==='' ? '' : $tmp);
$_tmp1=ob_get_clean();
if ($_smarty_tpl->tpl_vars['c']->value['cid'] == $_tmp1) {?> selected="selected" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</option>
              <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
            </select>
          </div>
          <div class="am-u-sm-12 am-u-md-6">*必填</div>
        </div>
        <div class="am-g am-margin-top">
          <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
            商品价格
          </div>
          <div class="am-u-sm-8 am-u-md-4">
            <input type="text" class="am-input-sm" name="price" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['price']->value)===null||$tmp==='' ? '' : $tmp);?>
" required>
          </div>
          <div class="am-u-sm-12 am-u-md-6">*必填</div>
        </div>
      </div>
      <div class="am-tab-panel am-fade" id="tab2">
        <div class="am-g am-margin-top">
          <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
            销售基数
          </div>
          <div class="am-u-sm-8 am-u-md-4">
            <input type="text" class="am-input-sm" name="base_num" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['base_num']->value)===null||$tmp==='' ? '' : $tmp);?>
" required>
          </div>
          <div class="am-u-sm-12 am-u-md-6"></div>
        </div>
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              内容描述
            </div>
            <div class="am-u-sm-12 am-u-md-10">
              <textarea name="infor" id="myEditor1" rows="10" style="height:400px; width:100%"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['infor']->value)===null||$tmp==='' ? '' : $tmp);?>
</textarea>
            </div>
          </div>
      </div>
      <div class="am-tab-panel am-fade" id="tab3">
        <div class="am-g am-margin-top">
          <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
            商品排序
          </div>
          <div class="am-u-sm-8 am-u-md-4">
            <input type="text" class="am-input-sm" name="g_order" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['g_order']->value)===null||$tmp==='' ? '' : $tmp);?>
" required>
          </div>
          <div class="am-u-sm-12 am-u-md-6">填写整数</div>
        </div>
        <div class="am-g am-margin-top">
          <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
            是否上架
          </div>
          <div class="am-u-sm-8 am-u-md-4">
            <label class="am-radio-inline">
            <input type="radio" value="1" name="state" <?php if ($_smarty_tpl->tpl_vars['state']->value != 2) {?>checked="checked"<?php }?>> 上架
            </label>
            <label class="am-radio-inline">
            <input type="radio" value="2" name="state" <?php if ($_smarty_tpl->tpl_vars['state']->value == 2) {?>checked="checked"<?php }?>> 下架
            </label>
          </div>
          <div class="am-u-sm-12 am-u-md-6">下架后商品在前台不显示</div>
        </div>
        <div class="am-g am-margin-top">
          <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
            是否推荐
          </div>
          <div class="am-u-sm-8 am-u-md-4">
            <label class="am-radio-inline">
            <input type="radio" value="2" name="is_recommend" <?php if ($_smarty_tpl->tpl_vars['is_recommend']->value != 1) {?>checked="checked"<?php }?>> 不推荐
            </label>
            <label class="am-radio-inline">
            <input type="radio"   value="1" name="is_recommend" <?php if ($_smarty_tpl->tpl_vars['is_recommend']->value == 1) {?>checked="checked"<?php }?>> 推荐
            </label>
          </div>
          <div class="am-u-sm-12 am-u-md-6">推荐</div>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" name="gid" value="<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
" />
  <input type="hidden" name="img" value="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" />
  <div class="am-margin">
    <button type="button" class="am-btn am-btn-primary am-btn-xs" onclick="gcheck();">提交保存</button>
  </div>
<form>
</div>
<?php echo '<script'; ?>
>
var editor1 = new UE.ui.Editor();
editor1.render('myEditor1');

function gcheck(){
  if($("#gform :input[name=name]").val()==""){
     alert("名称不能为空");
   return
  }
  if($("#gform :input[name=img]").val()==""){
     alert("图片不能为空");
   return
  }
  $("#gform").submit();

}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("tpl/admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>