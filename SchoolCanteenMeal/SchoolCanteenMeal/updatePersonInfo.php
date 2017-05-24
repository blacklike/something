<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/23
 * Time: 15:14
 */

header('Content-Type:text/html;charset=utf-8');
session_start();
error_reporting(0);
include ("media/conn/pdoConn.php");
$pdo=new PDO($dsn,$user,$pwd);
if($_POST['updateSub']!=""){
    $adminName=$_SESSION['adminName'];
    $shopName=$_POST['shopName'];
    $fuze=$_POST['fuze'];
//    echo $fuze;
//    echo "<br>";
    $tel=$_POST['tel'];
    $pwd=$_POST['pwd'];
    $email=$_POST['email'];

    if($photo){
        $path = './photo/' . $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], $path);
        $photo = $path;
    }else $photo="";

//    echo $photo;
    if($shopName||$pwd||$email){
//        $updateSql="update tb_mamger set user='$shopName',pwd='$pwd',principal='$shopPrin',img='$photo',email='$email',telephone='$tel' where user='$adminName'";
        $updateSql="update tb_mamger set user='$shopName',pwd='$pwd',img='$photo',email='$email',telephone='$tel',fuze='$fuze' where user='$adminName'";
//        echo $updateSql;
        $updateRes=$pdo->query($updateSql);
        if($updateRes){
//            echo "yes";
            $_SESSION['adminName']=$shopName;
            echo "<script>alert('更新成功！');window.location.href='index.php?name=personalInformation';</script>";
        }
        else {
//            echo "no";
            echo "<script>alert('更新失败！');window.location.href='index.php?name=personalInformation';</script>";
        }
    }else {
        echo "<script>alert('商店名称或者密码或者邮箱不能为空！');window.location.href='index.php?name=personalInformation';</script>";
    }



}
?>