<?php
header("content-type:text/html;charset=utf-8");
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
// ��������ģʽ ���鿪���׶ο��� ����׶�ע�ͻ�����Ϊfalse
define('APP_DEBUG',True);
define('BIND_MODULE','Admin');
// ����Ӧ��Ŀ¼
define('APP_PATH','./Application/');
define('ROOT',dirname(__FILE__));
// ����ThinkPHP����ļ�
require './ThinkPHP/ThinkPHP.php';
