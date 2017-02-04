-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 11 月 18 日 15:26
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `shop_cate`
--

CREATE TABLE IF NOT EXISTS `shop_cate` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `c_order` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `shop_cate`
--

INSERT INTO `shop_cate` (`cid`, `name`, `c_order`) VALUES
(1, '瓜果', 1),
(2, '零食', 0),
(3, '饮料', 0),
(4, '数码', 0);

-- --------------------------------------------------------

--
-- 表的结构 `shop_comment`
--

CREATE TABLE IF NOT EXISTS `shop_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(64) NOT NULL,
  `uid` int(11) NOT NULL,
  `serve_star` varchar(64) NOT NULL,
  `content` varchar(64) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `shop_good`
--

CREATE TABLE IF NOT EXISTS `shop_good` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `img` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `infor` mediumtext NOT NULL,
  `cid` int(11) NOT NULL,
  `g_order` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1',
  `base_num` int(11) NOT NULL,
  `is_recommend` tinyint(1) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `shop_good`
--

INSERT INTO `shop_good` (`gid`, `name`, `img`, `price`, `infor`, `cid`, `g_order`, `state`, `base_num`, `is_recommend`) VALUES
(1, '天天特价漳州天宝新鲜香蕉自然黄全国多省包邮banana', '1.jpg', '23.50', '', 1, 0, 1, 0, 1),
(2, '水果苹果糖心烟台栖霞红富士苹果10斤批发包邮新鲜有机苹果非洛川', '2.jpg', '2.60', '', 1, 0, 1, 0, 1),
(3, '梨 莱阳梨黄金梨皇冠梨新鲜水果 雪梨雪花梨山东梨子10斤多省包邮', '3.jpg', '5.60', '', 1, 0, 1, 0, 1),
(4, '新鲜桃子 桃子 应季水果桃 中华晚蜜桃 绿色水果 甜桃 5斤装包邮', '4.jpg', '56.00', '', 1, 0, 1, 0, 1),
(5, '火宫殿湖南特产长沙臭豆腐28g*30臭干子小吃办公室零食豆干包', '5.jpg', '2.30', '', 2, 0, 1, 0, 1),
(6, '卜珂 蔓越莓曲奇饼干200g/袋 进口料制作休闲零食大礼包 食品点心', '6.jpg', '45.00', '', 2, 0, 1, 0, 1),
(7, '大白兔奶糖 礼盒装糖果零食送女友闺蜜小朋友生日光棍节创意礼物', '7.jpg', '23.60', '', 2, 0, 1, 0, 1),
(8, '容妈牛肉干 麻辣五香孜然三种口味 四川特产休闲零食 限区4包包邮', '8.jpg', '14.60', '', 2, 0, 1, 0, 1),
(9, '农夫山泉 东方树叶茉莉花茶500ml/15瓶 茶饮料 北京包邮特价促销', '9.jpg', '3.00', '', 3, 0, 1, 0, 1),
(10, '美国进口樱桃可乐香草树根胡椒博士七喜等12听 进口饮料 全国包邮', '10.jpg', '5.90', '', 3, 0, 1, 0, 1),
(11, '北京红牛维生素功能饮料250ml*24听京津包邮', '11.jpg', '48.00', '', 3, 0, 1, 0, 1),
(12, '娃哈哈AD钙奶220ml*24瓶 整箱 儿童牛奶饮料 含乳饮料 包邮', '12.jpg', '65.00', '', 3, 0, 1, 0, 1),
(13, '全国联保 Sony/索尼 HDR-CX405 高清摄影机闪存数码摄像机CX240E', '13.jpg', '3.50', '', 4, 0, 1, 0, 1),
(14, '长春吉动数码★Apple/苹果 iPhone 6s Plus 5.5 港版 国行三网4G', '14.jpg', '26.20', '', 4, 0, 1, 0, 1),
(15, '特价正品金属u盘32g U盘５１２Ｇ U盘64G 优盘１２８Ｇ 高速包邮', '15.jpg', '27.00', '', 4, 0, 1, 0, 1),
(16, '三旭 Q80 水舞七彩灯喷水音响台式机电脑2.1蓝牙音箱低音炮影响', '16.jpg', '4.50', '', 4, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `shop_message`
--

CREATE TABLE IF NOT EXISTS `shop_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `shop_message`
--

INSERT INTO `shop_message` (`id`, `title`, `content`, `time`) VALUES
(5, '马上买-网上超市开业了', '<p>1、祝生意兴隆遍布大中华，财源茂盛盖过红塔山，财源滚滚胜过红河，日进斗金脚踏万宝路。今日你店开张，我的祝福请笑纳。<p>2、祝你生意好，万事无烦恼；祝你财源广，宾客赶不跑；祝你口碑妙，日夜进钞票；祝你心里美，造福全人类！祝生意兴隆，开业大吉！</p><p>3、开张之际，盛情恭贺：一贺你财源广进，二贺你生意兴隆，三贺你财富满门，一祝你金玉满堂，二祝你兴旺发达，三祝你开张大喜，一愿你福寿满堂，二愿你天赐吉祥，三愿你请我大餐！恭祝：开业盛典齐欢腾！</p><p>4、开张大吉，收到者，福气自天而降，人气自地而升，财气自东而来，喜气自西而至，运气自南而到，旺气自北而袭，瑞气由心而生，祥气由我而发！祝你凌云豪气，珠光宝气，兴旺盛气！</p><p>5、开张大吉，恭逢其盛，祝你财源犹如春潮，财源滚滚，财运犹如夏日，蒸蒸日上，生意犹如丹枫迎秋，红红火火，金钱犹如鹅毛大雪，日进斗金。祝你春夏秋冬四季发财。</p><p>6、这年头流行喝个晚茶，看个晚会，结个晚婚，道个晚安，但对你的祝贺不能晚，晚了就抓不住机会了，祝你开业大吉！</p><p>7、这个日子，你开始了自己的事业；这个日子，我送上最真诚的祝福：开好店，诚待天下客；勤动脑，和赚四海财！</p><p>8、在这春回大地，万象更新的美好时刻。你的生意开业了，祝愿你生意兴隆达三江啊。</p><p>9、经营店面是一项事业，多用心做好，开启店面是一种选择，多用心努力，店面开张是一种拼搏，多尽心付出，店面开始是一种机会，全心去料理，愿你开店吉祥走下去，成功伴你更如意。</p><p>10、金日开业：门前栽下梧桐树，引得凤凰纷纷来。旺店开业，质量至上，信誉把关。愿你站柜台，笑颜开，顺利好买卖，绝对发大财！</p><p>11、金日开业，送上祝福，鹏程似锦，千端称意，新业兴旺，万事顺心，四面八方，客来客往，门庭若市，店门呈盈，生意昌盛，财源滚滚！</p></p>', 1447831131);

-- --------------------------------------------------------

--
-- 表的结构 `shop_order`
--

CREATE TABLE IF NOT EXISTS `shop_order` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `order_no` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `tel` varchar(64) NOT NULL,
  `address` varchar(100) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `totalAmount` decimal(10,2) NOT NULL,
  `uid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `shop_ordergood`
--

CREATE TABLE IF NOT EXISTS `shop_ordergood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `num` int(11) NOT NULL,
  `order_no` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `shop_slide`
--

CREATE TABLE IF NOT EXISTS `shop_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `imgurl` varchar(64) NOT NULL,
  `url` varchar(255) NOT NULL,
  `s_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `shop_slide`
--

INSERT INTO `shop_slide` (`id`, `title`, `imgurl`, `url`, `s_order`) VALUES
(1, '活动1', '1.jpg', '#', 0),
(2, '活动2', '2.jpg', '#', 0),
(3, '活动3', '3.jpg', '#', 0);

-- --------------------------------------------------------

--
-- 表的结构 `shop_user`
--

CREATE TABLE IF NOT EXISTS `shop_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `tel` varchar(64) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(64) NOT NULL,
  `address` varchar(100) NOT NULL,
  `regtime` int(11) NOT NULL,
  `is_admin` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
