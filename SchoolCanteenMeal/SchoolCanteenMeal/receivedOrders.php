<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/12
 * Time: 14:53
 */
header('Content-Type:text/html;charset=utf-8');
session_start();
error_reporting(0);
include ("media/conn/pdoConn.php");
$pdo=new PDO($dsn,$user,$pwd);
$adminName=$_SESSION['adminName'];
$fname=$_GET['fname'];
$user=$_GET['user'];
if($user&&$fname){
    $miss="nomiss";
    $recsql="insert into tb_shopping(user,shopname,foodname,foodprice,ismiss) values('$adminName','$shopname','$foodname','$foodprice','$miss')";
    $recrea=$pdo->query($recsql);
    if($recrea){
        echo "<script>window.location.href='index.php?name=receivedOrders';</script>";
    }
    else {
        echo "<script>window.location.href='index.php?name=info';</script>";
    }
}
$usersql="select * from tb_shopping where shopname='$adminName' and ismiss='nomiss'";
$userres=$pdo->query($usersql);

?>
<div class="page-container">
    <table class="table table-bordered th_change">
        <thead>
        <tr><th colspan="4">已接订单</th></tr>
        </thead>
        <tr>
            <th>用户名</th>
            <th>小吃名称</th>
            <th>小吃价格</th>

        </tr>
        <?php
        while($userinfo=$userres->fetch()) {
            ?>
            <tr>
                <td><?php
                    echo $userinfo['user'];
                    ?></td>
                <td><?php
                    echo $userinfo['foodname'];
                    ?></td>
                <td><?php
                    echo $userinfo['foodprice'];
                    ?></td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>
