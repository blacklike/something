<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/9
 * Time: 12:55
 */
header('Content-Type:text/html;charset=utf-8');

//数据库服务器类型是MySQL
$dbms = 'mysql';
//数据库服务器主机名，端口号，选择的数据库
$host = 'localhost';
$port = '3306';
$dbname = 'test1';
//设定字符集
$charset = 'utf8';
//用户名和密码
$user = 'root';
$pwd = '';
$dsn = "$dbms:host=$host;port=$port;dbname=$dbname;charset=$charset";

?>