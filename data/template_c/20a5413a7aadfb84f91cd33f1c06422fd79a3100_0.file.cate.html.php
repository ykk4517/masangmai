<?php /* Smarty version 3.1.27, created on 2015-12-09 15:41:53
         compiled from "tpl\admin\cate.html" */ ?>
<?php
/*%%SmartyHeaderCode:215185667db419fb439_22769144%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a5413a7aadfb84f91cd33f1c06422fd79a3100' => 
    array (
      0 => 'tpl\\admin\\cate.html',
      1 => 1447808608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215185667db419fb439_22769144',
  'variables' => 
  array (
    'cate' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667db41b4f3e1_65539437',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667db41b4f3e1_65539437')) {
function content_5667db41b4f3e1_65539437 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '215185667db419fb439_22769144';
echo $_smarty_tpl->getSubTemplate ("tpl/admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="admin-content">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"> <strong class="am-text-primary am-text-lg">商品分类</strong></div>
  </div>
  <div class="am-g">
    <div class="am-u-md-6 am-cf">
      <div class="am-fl am-cf">
        <div class="am-btn-toolbar am-fl">
          <div class="am-btn-group am-btn-group-xs">
            <button type="button" class="am-btn am-btn-default" data-am-modal="{ target: '#doc-modal-cate', closeViaDimmer: 0, width: 400}"><span class="am-icon-plus"></span>新增
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="am-g">
    <div class="am-u-sm-12">
    <?php if ($_smarty_tpl->tpl_vars['cate']->value != '') {?>
      <table class="am-table am-table-striped am-table-hover table-main">
        <thead>
          <tr>
            <th class="table-title">分类名称</th>
            <th class="table-title">排序</th>
            <th width="150px" style="text-align:center;" class="table-set">操作</th>
          </tr>
        </thead>
      <tbody>
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
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['c']->value['c_order'];?>
</td>
            <td>
              <div class="am-btn-toolbar">
                <div class="am-btn-group am-btn-group-xs">
                  <a class="am-btn am-btn-default am-btn-xs am-text-secondary" href="javascript:void(0);" onclick="edit(<?php echo $_smarty_tpl->tpl_vars['c']->value['cid'];?>
)">
                    <span class="am-icon-pencil-square-o"></span>编辑
                  </a>
                  <a class="am-btn am-btn-default am-btn-xs am-text-danger" href="admin.php?c=cate&m=index&del=true&cid=<?php echo $_smarty_tpl->tpl_vars['c']->value['cid'];?>
">
                    <span class="am-icon-trash-o"></span>
                    删除
                  </a>
                </div>
              </div>
            </td>
          </tr>
        <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
      </tbody>
      </table>
      <?php } else { ?>
      <hr/>
      <p>没有分类</p>
      <?php }?>
      <hr />
      <p>注：分类下含有商品，该分类无法删除</p>
</div>
</div>
</div>
<!--添加-->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-cate">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">
    <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
    </div>
    <div class="am-modal-bd">
      <form class="am-form"  action="admin.php?c=cate&m=index" method="post" id="cform">
        <fieldset>
          <legend>增加分类</legend>
          <div class="am-form-group">
            <label for="doc-ipt-email-1">分类名称</label>
            <input type="text" class=""  name="name">
          </div>
          <div class="am-form-group">
            <label for="doc-ipt-email-1">排序（数字），越小越靠前</label>
            <input type="text" class="" placeholder="请输入排序" name="c_order">
          </div>
          <input type="hidden" name="cid" />
          <p>
            <button type="button" class="am-btn am-btn-success am-btn-block" onclick="ccheck();">确认提交</button>
          </p>
        </fieldset>
      </form>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
function ccheck(){
  if($("#cform :input[name=name]").val()==""){
     alert("名称不能为空");
   return
  }
  $("#cform").submit();
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
function edit(cid){
   $.get("admin.php?c=cate&m=getcate", { "cid": cid },
     function(data){
     $("input[name='name']").val(data.name);
     $("input[name='c_order']").val(data.c_order);
     $("input[name='cid']").val(data.cid);
     $('#doc-modal-cate').modal('open');
   }, "json");
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("tpl/admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>