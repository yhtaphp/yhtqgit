# Host: localhost  (Version: 5.5.47)
# Date: 2016-08-28 19:54:47
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "mycontent"
#

DROP TABLE IF EXISTS `mycontent`;
CREATE TABLE `mycontent` (
  `wid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) unsigned NOT NULL,
  `title` varchar(20) NOT NULL,
  `path` varchar(50) NOT NULL,
  `shart` varchar(100) NOT NULL,
  `hot` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`wid`),
  KEY `uid_y` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

#
# Data for table "mycontent"
#

/*!40000 ALTER TABLE `mycontent` DISABLE KEYS */;
INSERT INTO `mycontent` VALUES (37,1,'如何使用tp快速建站','D:\\www\\thinkphp/Public/html/1605/14639350573.html','如果你有php基础，很快就能建站，最近我就用tp建立了一个小小的站。花了两天的时间。第一步：先看一遍tp的手册， 主要看配置，模块，数据库操作，tp的标签，tp的操作寒素。还要熟悉tp访问的方式。第二',0,1463935057),(38,1,'sql注入初步了解  ','D:\\www\\thinkphp/Public/html/1605/14639350845.html','这里，我们并不是要去攻击别人的网站，只是了解一些sql的注入，可以做好开发。第一： 输入框很多的时候，我们并没有进行过滤，   然后， 一个单引号  （ \\\' ），就暴露了（手工检测，可以有专用的工具',1,1463935084),(39,1,'dedecms在linux上网页白屏','D:\\www\\thinkphp/Public/html/1605/14639351149.html','网页白屏，说明程序报错。另外  dedecms不能在php7上使用，需要调整安装页白屏：    打开php的报错显示，找到第一条，轻松解决安装好后，首页白屏：   打开dedecms的调试模式，然后你',1,1463935114),(40,1,'开启php错误提示 ','D:\\www\\thinkphp/Public/html/1605/14639351322.html','1,   在php.ini中找到把下面的改好。error_reporting = E_ALLdisplay_errors = on2 , 在php_fpn.conf中添加或者修改php_flag[di',0,1463935132),(41,1,'php初识面向对象之抽象类 ','D:\\www\\thinkphp/Public/html/1605/14639351514.html','abstract 修饰的类是抽象类，abstract 修饰的方法是抽象方法abstract A {      abstract  function get();     // 抽象方法不能有方法体，不',1,1463935151),(42,1,'php初始面向对象之了解属性/方法  ','D:\\www\\thinkphp/Public/html/1605/14639351708.html','属性： 用来描述对象的数据元素（也称为 数据 / 状态）方法 ：对对象的属性进行的操作  （也称  行为/ 操作）private ： 属性 / 方法          # 只能目前的这个对象里可用。p',7,1463935170),(43,1,'php初始面向对象之静态方法以及调用  ','D:\\www\\thinkphp/Public/html/1605/14639351895.html','class A{  private static $err =&quot;error&quot;;  public static getStr(){     echo &quot;这是静态方法&quo',0,1463935189),(44,1,'php初始面向对向之$this  ','D:\\www\\thinkphp/Public/html/1605/14639352262.html','$this -&gt;  xxphp中，调用当前对象的  属性和方法；class A{    private $b = &quot;12&quot;;    function msg(){      ',1,1463935226),(45,1,'php初识面向对象之使用父类的方法  ','D:\\www\\thinkphp/Public/html/1605/14639352446.html','php使用父类的方法：parent ::     xxxx()          注意，parent后面有两个冒号parent::  而不是  parent -&gt;  可以看出，php不想在内存中',1,1463935244),(46,1,'html标签间为何出现缝隙？ ','D:\\www\\thinkphp/Public/html/1605/14639352658.html','先来认识一下内联元素和块级元素inline          内联元素，不能设置  width  height  margin-top/-bottom  padding-top/-bottombloc',2,1463935265),(47,1,'php 初识面向对象之继承 ','D:\\www\\thinkphp/Public/html/1605/14639352878.html','php中，类的继承，只能继承一个父类，父类中的 private 类型不能被继承.,protected  类型能被子类继承，但是，不能被外部（类的外部）调用。子类可以继承父类的构造方法。',1,1463935287),(48,1,'简单实现响应是布局','D:\\www\\thinkphp/Public/html/1605/14639353066.html','简单实：@media screen and (max-width:1000px){\t.test{\t\twidth:1000px;\t\theight:500px;\t\ttext-align:center;\t\t',0,1463935306),(49,1,'jquery-find获取设置子元素的信','D:\\www\\thinkphp/Public/html/1605/14639353276.html','内容不多说，因为最近有用到，就写了下来。可以用来修改 web编辑器 ，保存下来的内容的样式，web编辑器保存的也就html文本$(&quot;div&quot;).find(&quot;img&quo',1,1463935327),(50,1,'mysql-insert插入数据  ','D:\\www\\thinkphp/Public/html/1605/14639353508.html','补上前面的。向数据库插入一行数据 ： insert into tableName values (value1,value2,value3,....)如果你要指定写入某一列，还可以这样insert i',1,1463935350),(52,1,'ededede','D:\\www\\thinkphp/Public/html/1605/14644219007.html','gtbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbhhhhh66y6',6,1464421900);
/*!40000 ALTER TABLE `mycontent` ENABLE KEYS */;

#
# Structure for table "phgroup"
#

DROP TABLE IF EXISTS `phgroup`;
CREATE TABLE `phgroup` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(20) NOT NULL DEFAULT '',
  `gtime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "phgroup"
#

/*!40000 ALTER TABLE `phgroup` DISABLE KEYS */;
INSERT INTO `phgroup` VALUES (1,'是淡淡的的速度',1472305394),(2,'事实上',1472305524),(3,'事实上',1472305659),(4,'刚刚突然给他人',1472305671),(5,'sdsads ',1472307598);
/*!40000 ALTER TABLE `phgroup` ENABLE KEYS */;

#
# Structure for table "photo"
#

DROP TABLE IF EXISTS `photo`;
CREATE TABLE `photo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(50) NOT NULL DEFAULT '',
  `ptime` int(11) NOT NULL DEFAULT '0',
  `gid` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "photo"
#

/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` VALUES (2,'/Public/images/1608/2016-08-28/57c2c9f762165.jpg',1472383479,4,'127.0.0.1');
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;

#
# Structure for table "pl"
#

DROP TABLE IF EXISTS `pl`;
CREATE TABLE `pl` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `wid` int(11) DEFAULT NULL,
  `email` varchar(20) NOT NULL DEFAULT '',
  `con` text NOT NULL,
  `ptime` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `yue` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`),
  KEY `wid` (`wid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

#
# Data for table "pl"
#

/*!40000 ALTER TABLE `pl` DISABLE KEYS */;
INSERT INTO `pl` VALUES (13,52,'dwdjnoj dwjiddw','dwdqlkjn iwdwdd',1465034218,'127.0.0.1',1),(14,52,'nsoiaj','&lt;SCRIPT&gt;alert(\\\'ssss\\\')&lt;/script&gt;',1465044000,'127.0.0.1',1);
/*!40000 ALTER TABLE `pl` ENABLE KEYS */;

#
# Structure for table "statistcs"
#

DROP TABLE IF EXISTS `statistcs`;
CREATE TABLE `statistcs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `ctime` int(11) NOT NULL DEFAULT '0' COMMENT '时间',
  `num` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='网站访问统计';

#
# Data for table "statistcs"
#

/*!40000 ALTER TABLE `statistcs` DISABLE KEYS */;
INSERT INTO `statistcs` VALUES (1,'127.0.0.1',1463283437,35);
/*!40000 ALTER TABLE `statistcs` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `pwd` varchar(35) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `ctime` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','35ff1c9d2b6ae57fc5d844a0a83daa57','127.0.0.1',145656565);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

#
# Structure for table "user-info"
#

DROP TABLE IF EXISTS `user-info`;
CREATE TABLE `user-info` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(10) NOT NULL DEFAULT '',
  `photo` varchar(100) NOT NULL DEFAULT '',
  `qq` int(11) NOT NULL DEFAULT '0',
  `qianming` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(20) NOT NULL DEFAULT '',
  `xuel` varchar(10) NOT NULL DEFAULT '',
  `jinzc` varchar(100) NOT NULL DEFAULT '',
  `zhiy` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "user-info"
#

/*!40000 ALTER TABLE `user-info` DISABLE KEYS */;
INSERT INTO `user-info` VALUES (1,'1','永恒天启','photo.png',1663034378,'墨雨(花生壳内网穿透)','1663034378@qq.com','高中','web程序开发','自由职业');
/*!40000 ALTER TABLE `user-info` ENABLE KEYS */;

#
# Structure for table "web_info"
#

DROP TABLE IF EXISTS `web_info`;
CREATE TABLE `web_info` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "web_info"
#

/*!40000 ALTER TABLE `web_info` DISABLE KEYS */;
INSERT INTO `web_info` VALUES (1,'默涵之家');
/*!40000 ALTER TABLE `web_info` ENABLE KEYS */;
