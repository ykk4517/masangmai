#马上买
马上买，是旨在为各微小企业或店铺，如外卖、小区超市等，提供网上销售渠道的电子商务网站。与其他电商网站相比，我们作品的优点有：页面简介大方、购物流程方便快捷、易操作与管理。以服务用户的角度出发，简化大量操作，还用户一个舒适的体验。"马上买"荣获2015年四川理工学院网页设计竞赛二等奖。
前台使用的是妹子UI，后台使用的是自己写的一个很渣、很不成熟的php框架（主要是为了自己熟悉MVC）。
我是不推荐将这个系统用于生产环境。学习使用的话，请将shop.sql导入数据库，修改config.php里面的数据库配置，基本上就可以了。  
目录结构如下  
data-----------数据缓存目录  
libs-----------前台和后台的控制方法  
public---------公共资源目录里面是妹子UI  
tpl------------VIEW文件  
ueditor--------百度编辑器  
suseframe-------自己写的MVC框架  
admin.php------后台入口文件  
config.php-----数据库配置文件  
index.php------前台入口文件  
set.conf-------站点配置文件  
shop.sql-------数据库语句  