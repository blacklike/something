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
//$shopname=$_GET['shop'];
//$foodname=$_GET['foodsname'];
//$foodprice=$_GET['foodprice'];
//if($shopname&&$foodname&&$foodprice){
//    $miss="miss";
//    $recsql="insert into tb_shopping(user,shopname,foodname,foodprice,ismiss) values('$adminName','$shopname','$foodname','$foodprice','$miss')";
//    $recrea=$pdo->query($recsql);
//    if($recrea){
//        echo "<script>window.location.href='index.php?name=receivedOrders';</script>";
//    }
//    else {
//        echo "<script>window.location.href='index.php?name=info';</script>";
//    }
//}
$missusersql="select * from tb_shopping where shopname='$adminName' and ismiss='miss'";
$missuserres=$pdo->query($missusersql);

?>
<div class="page-container">
    <table class="table table-bordered th_change">
        <thead>
        <tr><th colspan="4">未接订单</th></tr>
        </thead>
        <tr>
            <th>用户名称</th>
            <th>小吃名称</th>
            <th>小吃价格</th>
            <th>是否接单</th>
        </tr>
        <?php
        while($missueserinfo=$missuserres->fetch()) {
            ?>
            <tr>
                <td><?php
                    echo $missueserinfo['user'];
                    ?></td>
                <td><?php
                    echo $missueserinfo['foodname'];
                    ?></td>
                <td><?php
                    echo $missueserinfo['foodprice'];
                    ?></td>
                <td><a href="index.php?name=receivedOrders&fname=<?php
                    echo $missueserinfo['foodname'];
                    ?>&user=<?php echo $missueserinfo['user'];?>">接订单</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
