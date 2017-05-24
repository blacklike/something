<?php
error_reporting(0);
session_start();
error_reporting(0);
if(!$_SESSION['isLogin']){
    // !$_SESSION['islogin']  表示不存在 回到登录页面
    header("Location: login.php");exit;
}
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8" />
	<title>Metronic | Admin Dashboard Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/style.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="media/css/style2.css">
	<link href="media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
</head>
<body class="page-header-fixed">
<div class="header navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="brand" href="index.php?name=<?php if($_SESSION['isUser']=="admin")echo "info";
			else echo "home";?>">
				<!--<img src="media/image/logo.png" alt="logo"/>-->
				<p>校园食堂订购系统</p>
			</a>
			<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="media/image/menu-toggler.png" alt="" />
			</a>
			<!--插入头部-->
			<?php
			include ("pull_right.php");
			?>
		</div>
	</div>
</div>

<div class="page-container">

	<!--插入菜单-->
	<?php
	include("menu_left.php");
	?>
	<div class="page-content">

		<h3 class="page-title">
			邮院 <small>校园订餐系统</small>
		</h3>
		<ul class="breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="index.php?name=<?php if($_SESSION['isUser']=="admin")echo "info";
				else echo "home";?>">首页</a>
				<i class="icon-angle-right"></i>
			</li>
			<li><a href="#">邮院</a></li>
		</ul>
		<?php
		if($_GET['name']=="info") include("info.php");
		?>
        <?php
        if($_GET['name']=="home") include("home.php");
        ?>
		<?php
		if($_GET['name']=="shopinfo")include ("shopinfo.php");
		?>
		<?php
		if($_GET['name']=="onLine") include("onLine.php");
		?>
		<?php
		if($_GET['name']=="downLine")include ("downLine.php");
		?>
		<?php
		if($_GET['name']=="receivedOrders") include("receivedOrders.php");
		?>
		<?php
		if($_GET['name']=="missedOrders")include ("missedOrders.php");
		?>
		<?php
		if($_GET['name']=="buyOrders") include("buyOrders.php");
		?>
		<?php
		if($_GET['name']=="delOrders") include("delOrders.php");
		?>

		<?php
		if($_GET['name']=="personalInformation")include ("personalInformation.php");
		?>
	</div>
</div>
<div class="footer">
	<div class="footer-inner">
		2017 &copy; <a href="https://blacklike.github.io/jianli/main.html" title="blacklike个人主页" target="_blank">BlackLike</a>
	</div>
	<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
	</div>
</div>
<script src="media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="media/js/bootstrap.min.js" type="text/javascript"></script>

<!--[if lt IE 9]>

<script src="media/js/excanvas.min.js"></script>
<script src="media/js/respond.min.js"></script>

<![endif]-->

<script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="media/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>
<script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>
<script src="media/js/jquery.vmap.js" type="text/javascript"></script>
<script src="media/js/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="media/js/jquery.vmap.world.js" type="text/javascript"></script>
<script src="media/js/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="media/js/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="media/js/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="media/js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="media/js/jquery.flot.js" type="text/javascript"></script>
<script src="media/js/jquery.flot.resize.js" type="text/javascript"></script>
<script src="media/js/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="media/js/date.js" type="text/javascript"></script>
<script src="media/js/daterangepicker.js" type="text/javascript"></script>
<script src="media/js/jquery.gritter.js" type="text/javascript"></script>
<script src="media/js/fullcalendar.min.js" type="text/javascript"></script>
<script src="media/js/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="media/js/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="media/js/app.js" type="text/javascript"></script>
<script src="media/js/index.js" type="text/javascript"></script>
<script>
	$(function(){
		App.init();
		Index.init();
		Index.initJQVMAP();
		Index.initCalendar();
		Index.initCharts();
		Index.initChat();
		Index.initMiniCharts();
		Index.initDashboardDaterange();
		Index.initIntro();
	});

</script>
</body>
</html>