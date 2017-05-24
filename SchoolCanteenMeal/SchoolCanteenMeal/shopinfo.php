<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
error_reporting(0);
include ("media/conn/pdoConn.php");
$pdo=new PDO($dsn,$user,$pwd);
$shopname=$_GET['shopname'];
$onlineSql="select * from tb_foods where user='$shopname' and isOnline='online'";
$onlineRes=$pdo->query($onlineSql);

?>
<div class="page-container">
    <form action="foodonline.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered th_change">
            <thead>
            <tr><th colspan="5">上线小吃</th></tr>
            </thead>
            <tr>
                <th>小吃名称</th>
                <th>小吃价格</th>
                <th>小吃备注</th>
                <th>是否订购</th>
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
                    <td><a href="index.php?name=buyOrders&foodsname=<?php echo $onlineInfo['foodname']; ?>&shop=<?php echo $shopname;?>&foodprice=<?php echo $onlineInfo['foodprice'];?>">订购</a></td>
                </tr>
                <?php
            }
            ?>


        </table>
    </form>

</div>
