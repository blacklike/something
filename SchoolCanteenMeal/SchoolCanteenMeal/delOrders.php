<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/12
 * Time: 14:54
 */
header('Content-Type:text/html;charset=utf-8');
session_start();
error_reporting(0);
include ("media/conn/pdoConn.php");
$pdo=new PDO($dsn,$user,$pwd);
$adminName=$_SESSION['adminName'];
$fname=$_GET['fname'];
if($fname){
    $del="del";
    $delsql="update tb_shopping set isbuy='$del' where user='$adminName'";
    $delres=$pdo->query($delsql);
    if($delres){
        echo "<script>window.location.href='index.php?name=delOrders';</script>";
    }else {
        echo "<script>window.location.href='index.php?name=home';</script>";
    }
}

$delshopsql="select * from tb_shopping where user='$adminName' and isbuy='del'";
$delshopres=$pdo->query($delshopsql);
?>
<div class="page-container">
    <table class="table table-bordered th_change">
        <thead>
        <tr><th colspan="4">取消订单</th></tr>
        </thead>
        <tr>
            <th>店铺名称</th>
            <th>小吃名称</th>
            <th>小吃价格</th>
        </tr>
        <?php
        while($delshopinfo=$delshopres->fetch()) {
            ?>
            <tr>
                <td><?php
                    echo $delshopinfo['shopname'];
                    ?></td>
                <td><?php
                    echo $delshopinfo['foodname'];
                    ?></td>
                <td><?php
                    echo $delshopinfo['foodprice'];
                    ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
