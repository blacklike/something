<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/16
 * Time: 14:45
 */
header('Content-Type:text/html;charset=utf-8');
session_start();
error_reporting(0);
include ("media/conn/pdoConn.php");
$pdo=new PDO($dsn,$user,$pwd);
$shopsql="select * from tb_mamger where isUser='admin'";
$shopres=$pdo->query($shopsql);
?>
<div id="dashboard">
            <ul class="campusMenu page-content">
                <?php
                while($shopinfo=$shopres->fetch()) {
                    ?>
                    <li style="margin-left:5%;">
                        <a class="chuangkou" href="index.php?name=shopinfo&shopname=<?php
                        echo $shopinfo['user'];
                        ?>"><?php
                        echo $shopinfo['user'];
                            ?></a>
                        <img src="media/image/01.jpg" alt="">

                    </li>
                    <?php
                }
                ?>
<!--                <li style="margin-left:5%;">-->
<!--                    <a class="chuangkou" href="#">二号窗口</a>-->
<!--                    <img src="media/image/02.jpg" alt="">-->
<!--                </li>-->
<!--                <li style="margin-left:5%;">-->
<!--                    <a class="chuangkou" href="#">三号窗口</a>-->
<!--                    <img src="media/image/03.jpg" alt="">-->
<!--                </li>-->
<!--                <li style="margin-left:5%;">-->
<!--                    <a class="chuangkou" href="#">四号窗口</a>-->
<!--                    <img src="media/image/04.jpg" alt="">-->
<!--                </li>-->
<!--                <li style="margin-left:5%;">-->
<!--                    <a class="chuangkou" href="#">五号窗口</a>-->
<!--                    <img src="media/image/05.jpg" alt="">-->
<!--                </li>-->
<!--                <li style="margin-left:5%;">-->
<!--                    <a class="chuangkou" href="#">六号窗口</a>-->
<!--                    <img src="media/image/06.jpg" alt="">-->
<!--                </li>-->
            </ul>
</div>

