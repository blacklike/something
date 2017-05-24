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
$shopname=$_GET['shop'];
$foodname=$_GET['foodsname'];
$foodprice=$_GET['foodprice'];
if($shopname&&$foodname&&$foodprice){
    $buy="buy";
    $miss="miss";
    $addsql="insert into tb_shopping(user,shopname,foodname,foodprice,isbuy,ismiss) values('$adminName','$shopname','$foodname','$foodprice','$buy','$miss')";
    $addrea=$pdo->query($addsql);
    if($addrea){
        echo "<script>window.location.href='index.php?name=buyOrders';</script>";
    }
    else {
        echo "<script>window.location.href='index.php?name=home';</script>";
    }
}



$buyshopsql="select * from tb_shopping where user='$adminName' and isbuy='buy'";
$buyshopres=$pdo->query($buyshopsql);

?>
<div class="page-container">
    <table class="table table-bordered th_change">
        <thead>
        <tr><th colspan="3">已订订单</th></tr>
        </thead>
        <tr>
            <th>商店名称</th>
            <th>小吃名称</th>
            <th>小吃价格</th>
            <th>是否取消</th>
        </tr>
        <?php
        while($buyshopinfo=$buyshopres->fetch()) {
            ?>
            <tr>
                <td><?php
                    echo $buyshopinfo['shopname'];
                    ?></td>
                <td><?php
                echo $buyshopinfo['foodname'];
                    ?></td>
                <td><?php
                    echo $buyshopinfo['foodprice'];
                    ?></td>
                <td><a href="index.php?name=delOrders&fname=<?php
                    echo $buyshopinfo['foodname'];
                    ?>">取消</a></td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>
