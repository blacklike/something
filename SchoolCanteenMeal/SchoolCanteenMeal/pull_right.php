<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
include ("media/conn/pdoConn.php");
$pdo=new PDO($dsn,$user,$pwd);
$adminName=$_SESSION['adminName'];
$imgsql="select * from tb_mamger where user='$adminName'";
$imgres=$pdo->query($imgsql);
$imginfo=$imgres->fetch();


$counsql="select count(user) from tb_shopping where shopname='$adminName'";
$counres=$pdo->query($counsql);
$couninfo=$counres->fetch();


?>
<ul class="nav pull-right">
        <li class="dropdown user">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img alt="" src="<?php if($imginfo['img'])echo $imginfo['img'];
            else echo"media/image/avatar1_small.jpg" ?>" />
            <span class="username"><?php
                $adminName=$_SESSION['adminName'];
                echo $adminName;
                ?></span>
            <i class="icon-angle-down"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a href="index.php?name=personalInformation"><i class="icon-user"></i> My Profile</a></li>
            <li><a href="index.php?name=missedOrders"><i class="icon-envelope"></i> My Inbox(<?php echo $couninfo;?>)</a></li>
            <li><a href="logout.php?action=logout"><i class="icon-key"></i> Log Out</a></li>
        </ul>
    </li>
</ul>
