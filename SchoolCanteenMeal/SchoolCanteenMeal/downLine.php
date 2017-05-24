<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/12
 * Time: 14:49
 */
header('Content-Type:text/html;charset=utf-8');
session_start();
error_reporting(0);
include ("media/conn/pdoConn.php");
$pdo=new PDO($dsn,$user,$pwd);
$adminName=$_SESSION['adminName'];
if($foodname=$_GET['foodname']){
    $down="downline";
    $date=$_GET['date'];
    $updatesql="update tb_foods set isOnline='$down',dowmtime='$date' where user='$adminName' and foodname='$foodname'";
    $updateres=$pdo->query($updatesql);
//    if($updateres)echo "yes";
//    else echo "no";

}

$downlineSql="select * from tb_foods where user='$adminName' and isOnline='downline'";
$downlineRes=$pdo->query($downlineSql);
?>
<div class="page-container">
    <table class="table table-bordered th_change">
        <thead>
        <tr><th colspan="4">下线小吃</th></tr>
        </thead>
        <tr>
            <th>小吃名称</th>
            <th>小吃价格</th>
            <th>小吃下线时间</th>
            <th>是否重新上线</th>
        </tr>
        <?php
        while($downlineInfo=$downlineRes->fetch()) {
            ?>
            <tr>

                <td><?php
                    echo $downlineInfo['foodname'];
                    ?></td>
                <td><?php
                    echo $downlineInfo['foodprice'];
                    ?></td>
                <td><?php
                    echo $downlineInfo['dowmtime'];
                    ?></td>
                <td><a href="index.php?name=onLine&foodname=<?php echo $downlineInfo['foodname']; ?>">上线</a></td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>

