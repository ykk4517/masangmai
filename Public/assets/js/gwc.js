/*-------------------------------购物车效果------------------------------------------------*/
utils = {
    setParam : function (name,value){
        localStorage.setItem(name,value)
    },
    getParam : function(name){
        return localStorage.getItem(name)
    }
}

orderdetail={
    username:"",
    phone:"",
    address:"",
    zipcode:"",
    totalNumber:0,
    totalAmount:0.00,
  totalintergal:0
}
cart = {
    //向购物车中添加商品
    addproduct:function(product){
    var ShoppingCart = utils.getParam("ShoppingCart");
        if(ShoppingCart==null||ShoppingCart==""){
      //第一次加入商品
            var jsonstr = {"productlist":[{"id":product.id,"name":product.name,"num":product.num,"price":product.price,"intergal":product.intergal}],"totalNumber":product.num,"totalAmount":(product.price*product.num),"totalintergal":(product.intergal*product.num)};//alert(product.intergal);
            utils.setParam("ShoppingCart","'"+JSON.stringify(jsonstr));
        }else{
            var jsonstr = JSON.parse(ShoppingCart.substr(1,ShoppingCart.length));
            var productlist = jsonstr.productlist;
            var result=false;
      //查找购物车中是否有该商品
            for(var i in productlist){
                if(productlist[i].id==product.id){
                    productlist[i].num=parseInt(productlist[i].num)+parseInt(product.num);
                    result = true;
                }
            }
            if(!result){
        //没有该商品就直接加进去
                productlist.push({"id":product.id,"name":product.name,"num":product.num,"price":product.price,"intergal":product.intergal});
            }
      //重新计算总价
      jsonstr.totalintergal=parseInt(jsonstr.totalintergal)+ parseInt(product.num)*parseInt(product.intergal);
            jsonstr.totalNumber=parseInt(jsonstr.totalNumber)+parseInt(product.num);
            jsonstr.totalAmount=parseFloat(jsonstr.totalAmount)+(parseInt(product.num)*parseFloat(product.price));
      /*      jsonstr.totalintergal=parseInt(jsonstr.totalintergal)+(parseInt(product.num)*parseInt(product.intergal));
*/      /*parseInt(jsonstr.totalintergal)+(parseInt(product.num)*parseInt(product.intergal));
           */ orderdetail.totalNumber = jsonstr.totalNumber;
            orderdetail.totalAmount = jsonstr.totalAmount;
      orderdetail.totalintergal = jsonstr.totalintergal;
            //保存购物车
            utils.setParam("ShoppingCart","'"+JSON.stringify(jsonstr));
        }
    

    },
    //修改给买商品数量
    updateproductnum:function(id,num){
        var ShoppingCart = utils.getParam("ShoppingCart");
        var jsonstr = JSON.parse(ShoppingCart.substr(1,ShoppingCart.length));
        var productlist = jsonstr.productlist;
        
        for(var i in productlist){
            if(productlist[i].id==id){
                jsonstr.totalNumber=parseInt(jsonstr.totalNumber)+(parseInt(num)-parseInt(productlist[i].num));
                jsonstr.totalAmount=parseFloat(jsonstr.totalAmount)+((parseInt(num)*parseFloat(productlist[i].price))-parseInt(productlist[i].num)*parseFloat(productlist[i].price));
        jsonstr.totalintergal=parseInt(jsonstr.totalintergal)+(parseInt(num)*parseInt(productlist[i].intergal));
                productlist[i].num=parseInt(num);
        orderdetail.totalintergal = jsonstr.totalintergal;
                
                orderdetail.totalNumber = jsonstr.totalNumber;
                orderdetail.totalAmount = jsonstr.totalAmount;
                utils.setParam("ShoppingCart","'"+JSON.stringify(jsonstr));
                return;
            }
        }
    },
    
    //判断购物车中是否存在商品
    existproduct:function(id){
        var ShoppingCart = utils.getParam("ShoppingCart");
        var jsonstr = JSON.parse(ShoppingCart.substr(1,ShoppingCart.length));
        var productlist = jsonstr.productlist;
        var result=false;
        for(var i in productlist){
            if(productlist[i].id==product.id){
                result = true;
            }
        }
        return result;
    },
    //删除购物车中商品
    deleteproduct:function(id){
        var ShoppingCart = utils.getParam("ShoppingCart");
        var jsonstr = JSON.parse(ShoppingCart.substr(1,ShoppingCart.length));
        var productlist = jsonstr.productlist;
        var list=[];
        for(var i in productlist){
            if(productlist[i].id==id){
                jsonstr.totalNumber=parseInt(jsonstr.totalNumber)-parseInt(productlist[i].num);
                jsonstr.totalAmount=parseFloat(jsonstr.totalAmount)-parseInt(productlist[i].num)*parseFloat(productlist[i].price);
        jsonstr.totalintergal=parseInt(jsonstr.totalintergal)-(parseInt(productlist[i].num)*parseInt(productlist[i].totalintergal));
            }else{
                list.push(productlist[i]);
            }
        }
        jsonstr.productlist = list;
        orderdetail.totalNumber = jsonstr.totalNumber;
    orderdetail.totalintergal = jsonstr.totalintergal;
        orderdetail.totalAmount = jsonstr.totalAmount;
        utils.setParam("ShoppingCart","'"+JSON.stringify(jsonstr));
    $("#itemlist").text('');
    car_load();
    $('#num').text(orderdetail.totalNumber);
    },
  //清空购物车
  delcart:function(){
    utils.setParam("ShoppingCart","'{\"productlist\":[],\"totalNumber\":0,\"totalAmount\":0,\"totalintergal\":0}");
  }
};
//获取购物车中的所有商品
    //function getproductlist(){
       
 //   }