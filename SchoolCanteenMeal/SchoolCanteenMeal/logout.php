<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11
 * Time: 11:12
 */
include "media/conn/pdoConn.php";
session_start();
$logout=$_GET['action'];
if($logout=='logout'){
    session_destroy(); //清空以创建的所有SESSION
    unset($_SESSION['isLogin']);
    echo "<script>window.location.href='login.php';</script>";
    exit;
}