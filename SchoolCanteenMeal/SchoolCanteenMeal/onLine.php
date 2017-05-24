<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
error_reporting(0);
include ("media/conn/pdoConn.php");
$pdo=new PDO($dsn,$user,$pwd);
$adminName=$_SESSION['adminName'];
if($foodname=$_GET['foodname']){
    $on="online";
    $updatesql="update tb_foods set isOnline='$on' where user='$adminName' and foodname='$foodname'";
    $updateres=$pdo->query($updatesql);
    if($updateres){
        echo "<script>window.location.href='index.php?name=onLine';</script>";
    }
    else echo "<script>window.location.href='index.php?name=info';</script>";
}
$onlineSql="select * from tb_foods where user='$adminName' and isOnline='online'";
$onlineRes=$pdo->query($onlineSql);

?>
<div class="page-container">
    <form action="foodonline.php" method="post" enctype="multipart/form-data">
    <table class="table table-bordered th_change">
        <thead>
        <tr><th colspan="4">上线小吃</th></tr>
        </thead>

        <tr>
            <td style="padding: 0;"><input type="text" name="food_name" value="" placeholder="小吃名称" style="padding: 0;margin: 0; width: 100%;height: 40px;"></td>
            <td style="padding: 0;"><input type="text" name="food_price" value="" placeholder="小吃价格" style="padding: 0;margin: 0; width: 100%;height: 40px;"></td>
            <td style="padding: 0;"><input type="text" name="food_info" value="" placeholder="小吃备注" style="padding: 0;margin: 0; width: 100%;height: 40px;"></td>
            <td colspan="2" style="padding: 0;"><input class="btn pull-right" type="submit" name="foodSub" value="上线"></td>

        </tr>

        <tr>
            <th>小吃名称</th>
            <th>小吃价格</th>
            <th>小吃备注</th>
            <th>小吃订购人数</th>
            <th>是否在线</th>
        </tr>

        <?php
        while($onlineInfo=$onlineRes->fetch()) {
            ?>
            <tr>

                <td><?php
                echo $onlineInfo['foodname'];
                    ?></td>
                <td><?php
                    echo $onlineInfo['foodprice'];
                    ?></td>
                <td><?php
                    echo $onlineInfo['info'];
                    ?></td>
                <td>店铺名称</td>
                <td><a href="index.php?name=downLine&foodname=<?php echo $onlineInfo['foodname'];?>&date=<?php echo date("Y-m-d H:i:s");?>">下线</a></td>
            </tr>
            <?php
        }
        ?>


    </table>
    </form>

</div>
