<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/23
 * Time: 17:25
 */
header('Content-Type:text/html;charset=utf-8');
session_start();
error_reporting(0);
include ("media/conn/pdoConn.php");
$pdo=new PDO($dsn,$user,$pwd);
$adminName=$_SESSION['adminName'];
if($_POST['foodSub']!=""){
    $food_name=$_POST['food_name'];
    $food_price=$_POST['food_price'];
    $food_info=$_POST['food_info'];
    $online="online";

    if($food_name||$food_price){
//        $foodSql="insert into tb_sfoods (user,foods,price,info,isOnline) values ('$adminName','$foodName','$foodPrice','$foodInfo','$online')";
        $foodSql="insert into tb_foods (user,foodname,foodprice,info,isOnline) values ('$adminName','$food_name','$food_price','$food_info','$online')";
//        echo $foodSql;
        $foodRes=$pdo->query($foodSql);

        if($foodRes){
//            echo "yes";
            echo "<script>alert('添加小吃成功！');window.location.href='index.php?name=onLine';</script>";
        }else{
//            echo "no";
            echo "<script>alert('添加小吃失败！');window.location.href='index.php?name=onLine';</script>";
        }
    }else{
//        echo "小吃名称或者小吃价格不能为空！";
        echo "<script>alert('小吃名称或者小吃价格不能为空！');window.location.href='index.php?name=onLine';</script>";
    }


}
?>

