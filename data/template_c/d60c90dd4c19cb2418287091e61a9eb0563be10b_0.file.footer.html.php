<?php /* Smarty version 3.1.27, created on 2015-12-09 15:11:16
         compiled from "D:\www\shop\tpl\home\footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:262425667d41441e192_40549730%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd60c90dd4c19cb2418287091e61a9eb0563be10b' => 
    array (
      0 => 'D:\\www\\shop\\tpl\\home\\footer.html',
      1 => 1449643892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262425667d41441e192_40549730',
  'variables' => 
  array (
    'tel' => 0,
    'name' => 0,
    'address' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5667d4144b5f62_67445117',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5667d4144b5f62_67445117')) {
function content_5667d4144b5f62_67445117 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '262425667d41441e192_40549730';
Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'set.conf', null, 'local');?>
<footer data-am-widget="footer" class="am-footer am-footer-default am-hide-sm-only">
  <div class="am-footer-miscs ">
      <p>由 <a href="http://www.xsdhy.com/" title="可曦团队" target="_blank" class="">可曦团队</a>提供技术支持</p>
      <p>CopyRight©2014  <?php echo $_smarty_tpl->getConfigVariable('site_name');?>
 Inc.</p>
      <p><a href="http://www.miitbeian.gov.cn" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('site_icp');?>
</a></p>
  </div>
</footer>
</body>
</html>
<!--手机版导航-->
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default am-hide-lg-only" id="">
  <ul class="am-navbar-nav am-cf am-avg-sm-4">
    <li>
      <a href="index.php">
        <img src="Public/assets/i/icon/home.png"/>
        <span class="am-navbar-label">首页</span>
      </a>
    </li>
    <li style="position: relative;">
      <a href="index.php?m=Index&a=cart">
      <span class="am-badge am-badge-warning am-round Allcount" style="position: absolute;left: 50%;top: 2px;margin-left: 5px;">0</span>
        <img src="Public/assets/i/icon/buy.png"/>
        <span class="am-navbar-label">购物车</span>
      </a>
    </li>
    <li>
      <a href="index.php?c=index&m=messagelist">
        <img src="Public/assets/i/icon/article.png"/>
        <span class="am-navbar-label">资讯</span>
      </a>
    </li>
    <li>
      <a href="index.php?c=index&m=user">
        <img src="Public/assets/i/icon/user.png"/>
        <span class="am-navbar-label">用户</span>
      </a>
    </li>
  <li>
      <a href="index.php?c=index&m=map">
        <img src="Public/assets/i/icon/map.png"/>
        <span class="am-navbar-label">地图</span>
      </a>
    </li>
  </ul>
</div>
<!--登陆窗体-->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-login">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">
      <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
    </div>
    <div class="am-modal-bd">
      <form class="am-form"  action="index.php?c=index&m=login" method="post" id="loform" data-am-validator>
      <fieldset>
      <legend>会员登陆</legend>
      <div class="am-form-group">
        <input type="text" minlength="11" maxlength="11" placeholder="输入注册手机号" name="tel" required>
      </div>
      <div class="am-form-group">
        <input type="password" minlength="6" placeholder="请输入注册密码" name="password" required>
      </div>
      <p><input type="submit" class="am-btn am-btn-success am-btn-block" value="登陆"></p>
      <p><button type="button" class="am-btn am-btn-success am-btn-block" data-am-modal="{ target: '#doc-modal-register'}">注册</button></p>
      </fieldset>
    </form>
    </div>
  </div>
</div>
<!--登陆结束-->
<!--注册窗体-->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-register">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">
      <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
    </div>
    <div class="am-modal-bd">
      <form class="am-form"  action="index.php?c=index&m=register" method="post" id="reform" data-am-validator>
      <fieldset>
      <legend>新用户注册</legend>
      <div class="am-form-group">
        <input type="text" minlength="11" maxlength="11" placeholder="输入注册手机号" name="tel" required>
      </div>
      <div class="am-form-group">
        <input type="password" id="pwd1" minlength="6" placeholder="请输入注册密码" name="password" required>
      </div>
      <div class="am-form-group">
        <input type="password" minlength="6" placeholder="请重复输入注册密码" name="repassword" data-equal-to="#pwd1" required>
      </div>
      <div class="am-form-group">
        <input type="email" placeholder="输入注册邮箱" name="email" required>
      </div>
      <p><input type="submit" class="am-btn am-btn-success am-btn-block" value="注册一个账号"></p>
      </fieldset>
    </form>
    </div>
  </div>
</div>
<!--提交订单-->
<form class="am-form"  action="index.php?c=index&m=order" method="post" id="oform" data-am-validator>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-account">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">
      <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
    </div>
    <div class="am-modal-bd">
      <fieldset>
      <legend>在线预定</legend>
      <div class="am-form-group">
        <input type="text" minlength="11" maxlength="11" placeholder="输入收货人手机号" name="tel" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tel']->value)===null||$tmp==='' ? '' : $tmp);?>
" required>
      </div>
      <div class="am-form-group">
        <input type="text" minlength="2" placeholder="输入收货人姓名" name="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
" required>
      </div>
      <div class="am-form-group">
        <input type="text" placeholder="输入收货地址" name="address" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['address']->value)===null||$tmp==='' ? '' : $tmp);?>
" required>
      </div>
      <div class="am-form-group">
        <textarea name="remarks" cols="" rows="" placeholder="送货备注，时间，留言"></textarea>
      </div>
      <div class="am-form-group" style="text-align: left;" id="needtopay">
         总计金额<span id="remainuse" style="color:#FF0000"></span>元。请注意，商品价格高于<?php echo $_smarty_tpl->getConfigVariable('site_price');?>
元才配送
      </div>
      <input type="hidden"  name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
      <input type="hidden"  name="totalAmount" value="">
      <input type="hidden"  name="order_no" value="">
      <div class="am-form-group" style="display: -webkit-box;">
        <input type="text" placeholder="请输入验证码" style="width: 60%;" name="captchaa">
        <span id="captcha" style="width:40%;"></span>
      </div>
      <p><button id="tijiao" type="button" class="am-btn am-btn-success am-btn-block" onclick="ocheck();" data-am-loading="{ loadingText: '努力提交中...', resetText: '确认提交'}">确认提交</button></p>
      </fieldset>
    </div>
  </div>
</div>
</form>
<!--提交订单结束-->
<?php echo '<script'; ?>
>
  // 购物车处理
$(function(){
  //商品减
  $(".pd_product-num-minus").click(function(){
    
     var buycount = $('.buycount').html();              // 数量
     if(buycount<=1){
     $('.buycount').html(Number(1));
     }else{
     $('.buycount').html(Number(buycount)-Number(1)); 
     }
  });
  //商品加
  $(".pd_product-num-plus").click(function(){
     var buycount = $('.buycount').html();              // 数量
     $('.buycount').html(Number(buycount)+Number(1)); 
  });
  //加载购物车
  car_load();
});
//清空购物车
$("#delcart").click(function(){
  cart.delcart();
  car_load();//更新购物车
});
//商品详情界面将商品放入购物车
function putCart(){
  var product={
      id:'',    // 商品的ID
      name: '',    // 商品名称
      num:$('.buycount').html(),              // 数量
      price:'',    // 价格
    };
  shock();//购物框标签晃动一下
  cart.addproduct(product);
  car_load();//更新购物车
}
//商品列表界面将商品放入购物车
function addCart(id,name,price){
  var product={
      id:id,    // 商品的ID
      name:name,    // 商品名称
      num:1,              // 数量
      price:price,    // 价格
    };
  shock();//购物框标签晃动一下
  cart.addproduct(product);
  car_load();//更新购物车
}
//购物框标签晃动一下
function shock(){
  var div=$(".Allcount");
  div.animate({ left:'60%'},100);
  div.animate({ left:'50%'},100);
  div.animate({ left:'60%'},100);
  div.animate({ left:'50%'},100);
}
//修改购物车内的商品
function update(id,num){
  var buycount = $('#'+id).html();              // 数量
  $('#'+id).html(Number(buycount)+Number(num));   //更新购物车里面的数量
  var num = $('#'+id).html();   //获取更新后的
  if(num<=0){
  cart.deleteproduct(id);
  }else{
  cart.updateproductnum(id,num);
  }
  shock();//购物框标签晃动一下
  car_load();//更新购物车
}
function car_load(){
  var ShoppingCart = utils.getParam("ShoppingCart");
  if(ShoppingCart==null||ShoppingCart==""){
    var str='<div style="font-size: 16px;font-weight: bold;text-align: center;color: #009f3c;line-height: 160px;">购物车空空如也</div>';
    $('#totalAmount').html('总计价格：0元');
  }else{
  //alert(ShoppingCart);
    var jsonstr = JSON.parse(ShoppingCart.substr(1,ShoppingCart.length));
    var productlist = jsonstr.productlist;
    orderdetail.totalNumber = jsonstr.totalNumber;
    orderdetail.totalAmount = jsonstr.totalAmount;
    var str='';
    for(var i=0;i<productlist.length;i++){
      str+='<li><a href="index.php?c=index&a=good&gid='+productlist[i].id+'">'+productlist[i].name.substr(0,9)+'</a><span>'+productlist[i].price+'元 x <span class="am-badge am-badge-success am-round am-text-default" onclick="update('+productlist[i].id+',-1)">-</span><span class="am-badge am-badge-success am-round am-text-default" id="'+productlist[i].id+'">'+productlist[i].num+'</span><span class="am-badge am-badge-success am-round am-text-default" onclick="update('+productlist[i].id+',1)">+</span></span></li>';
    } 
    str+='<li id="Hide" style="text-align:right;padding-right:20px;background-color:#C6F5C6;">总计价格：<span style="color:red; font-weight:bold;font-size:14px;">'+orderdetail.totalAmount.toFixed(2)+'<span>元</li>';
    $('.Allcount').html(orderdetail.totalNumber);
    $('#totalAmount').html('总计价格：<span style="font-weight:bold;">'+orderdetail.totalAmount.toFixed(2)+'<span>元');
    $("#goforcart").attr("onclick","showcanuse(orderdetail.totalAmount.toFixed(2));");
  }
  $('#cart').html(str);
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
//引入验证码
window.onload=function()
{
document.getElementById('captcha').innerHTML='<img alt="点击刷新验证码" src="suseframe/org/captcha/captcha.php" style="cursor:pointer" onclick="this.src=this.src+\'?\'" />';
}
function ocheck(){
  if("<?php echo $_smarty_tpl->getConfigVariable('is_ghost');?>
"=="0" && "<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" == ""){
     alert("本站禁止游客下单，请先登录！");
     window.location.reload();
     return
  }
  if($("#remainuse").html()<<?php echo $_smarty_tpl->getConfigVariable('site_price');?>
){
   alert("抱歉，商品价格高于<?php echo $_smarty_tpl->getConfigVariable('site_price');?>
元才配送");
   return
  }
  if($("#oform :input[name=tel]").val()==""){
     alert("手机号不能为空");
   return
  }
  if($("#oform :input[name=name]").val()==""){
     alert("收货人不能为空");
   return
  }
  if($("#oform :input[name=address]").val()==""){
     alert("收货地址不能为空");
   return
  }
  if($("#oform :input[name=captchaa]").val()==""){
     alert("验证码不能为空");
   return
  }
$('#tijiao').button('loading');
//验证码
$.post("index.php?c=index&m=checkcode",{ captchaa:$("#oform :input[name=captchaa]").val()},function(data){
  if(data){
    var ShoppingCart = utils.getParam("ShoppingCart");
    if(ShoppingCart==null||ShoppingCart==""){
        alert("没有商品，请先去购物吧！");
        return
    }else{
      var jsonstr = JSON.parse(ShoppingCart.substr(1,ShoppingCart.length));
      //alert(jsonstr);
      //return;
      var productlist = jsonstr.productlist;
      orderdetail.totalAmount = jsonstr.totalAmount;
      if(orderdetail.totalAmount.toFixed(2)<=0){
        alert("没有商品，请先去购物吧！");
            return
      }else{
        var order_no = new Date().getTime();
        $("#oform :input[name=order_no]").val(order_no);   //获取一个时间戳作为订单号
        $("#oform :input[name=totalAmount]").val(orderdetail.totalAmount.toFixed(2));   //提交订单总额
        var n = 0 ;
        for(var i=0;i<productlist.length;i++){
          $.post("index.php?c=index&m=ordergood", { gid: productlist[i].id, num: productlist[i].num ,name:productlist[i].name,price:productlist[i].price,order_no:order_no},function(data){
            n = n+1;
            if(n==productlist.length){
              utils.setParam("ShoppingCart","");
              car_load();
              $("#oform").submit();
            }
            } ,'json');
        }
      }
    }
  }else{
  alert("验证码错误");
  $('#tijiao').button('reset');
  return
  }
});

}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
function showcanuse(totalamount){
  $('#remainuse').html(totalamount);
}
//最低配送价格
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>