<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/23
 * Time: 7:54
 */
header('Content-Type:text/html;charset=utf-8');
include ("media/conn/pdoConn.php");
$pdo=new PDO($dsn,$user,$pwd);
if($_POST['reg_sub']!=""){
    $username=$_POST['username'];
    $pwd=$_POST['password'];
    $email=$_POST['email'];
    $isUser=$_POST['check'];

    $reg_sql="insert into tb_mamger(user,pwd,email,isUser) values('$username','$pwd','$email','$isUser')";
//    echo $reg_sql;
    $reg_result=$pdo->query($reg_sql);
    if($reg_result){
//        echo "yes";
        echo "<script>alert('注册成功！');window.location.href='login.php';</script>";
    }
    else{
//        echo "no";
        echo "<script>alert('注册失败！');window.location.href='login.php';</script>";
    }
}
?>