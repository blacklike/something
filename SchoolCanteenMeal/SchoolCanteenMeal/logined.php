<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/12
 * Time: 16:27
 */
//error_reporting(0);
header('Content-Type:text/html;charset=utf-8');
include ("media/conn/pdoConn.php");
$pdo=new PDO($dsn,$user,$pwd);
session_start();

if($_POST['sub']!=""){
//    echo $_POST['check'];
    $isUser=$_POST['check'];
    $userName=$_POST['username'];
    $passWord=$_POST['password'];
//    echo $isUser;
    if($isUser=="admin"){
        $sqlAdmin="select * from tb_mamger where user='$userName' and pwd='$passWord' and isUser='$isUser'";
//        echo $sqlAdmin;
        $resAdmin=$pdo->query($sqlAdmin);
//        print_r($resAdmin);
        $infoAdmin=$resAdmin->fetch();
//        print_r($infoAdmin);
        if($infoAdmin){
            $_SESSION['isLogin']=true;
            $_SESSION['isUser']=$isUser;
            $_SESSION['adminName']=$userName;
            echo "<script>alert('登录成功！');window.location.href='index.php?name=missedOrders';</script>";
        }else{
            echo "<script>alert('登录失败！');window.location.href='login.php';</script>";
        }
    }
    else if($isUser=="user"){
        $sqlUser="select * from tb_mamger where user='$userName' and pwd='$passWord' and isUser='$isUser'";
//        echo $sqlAdmin;
        $resUser=$pdo->query($sqlUser);
//        print_r($resAdmin);
        $infoUser=$resUser->fetch();
//        print_r($infoAdmin);
        if($infoUser){
            $_SESSION['isLogin']=true;
            $_SESSION['isUser']=$isUser;
            $_SESSION['adminName']=$userName;
            echo "<script>alert('登录成功！');window.location.href='index.php?name=home';</script>";
        }else{
            echo "<script>alert('登录失败！');window.location.href='login.php';</script>";
        }
    }else echo "<script>alert('登录失败！');window.location.href='login.php';</script>";
}
?>