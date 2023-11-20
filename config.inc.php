<?php
//全局session_start
session_start();
//全局居设置时区
date_default_timezone_set('Asia/Shanghai');
//全局设置默认字符
header('Content-type:text/html;charset=utf-8');
//定义数据库连接参数
define('DBHOST', 'essence.com.cn');
define('DBUSER', '安信证券');//将root修改为连接mysql的用户名
define('DBPW', 'axzq.com.cn');
define('DBNAME', '114.141.187.201');//自定义，建议不修改
define('DBPORT', '3306');

?>