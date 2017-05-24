<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>校园点餐系统</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link href="media/css/login.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="media/image/favicon.ico" />
</head>
<body class="login">
	<div class="logo">
		<h1 style="color: #FFFFFF;">登录</h1>
	<!--<img src="media/image/logo-big.png" alt="" />-->
	</div>
	<div class="content">
		<form class="form-vertical login-form" action="logined.php" method="post" enctype="multipart/form-data">
			<h3 class="form-title">请登录你的账号</h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>请输入你的用户名跟密码.</span>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">用户名</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="用户名" name="username" value=""/>

					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">密码</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" placeholder="密码" name="password" value=""/>
					</div>
				</div>
			</div>
			<div class="form-radio">
				  <input class="radio" type="radio" value="admin" name="check" checked/>商家
				  <input class="radio" type="radio" value="user" name="check" />用户
			</div>
			<div class="form-actions">
				<label class="checkbox">
				<input type="checkbox" name="remember" value="1"/>记住我
				</label>
                <input type="submit" value="登录" name="sub" class="btn green pull-right">
			</div>
			<div class="forget-password">
				<h4>忘记密码 ?</h4>
				<p>
					别担心, 点击 <a href="javascript:;" class="" id="forget-password">这里</a>
					找回你的密码.
				</p>
			</div>
			<div class="create-account">
				<p>
					还没有账号吗 ?&nbsp; 
					<a href="javascript:;" id="register-btn" class="">创建账号</a>
				</p>
			</div>
		</form>
		<form class="form-vertical forget-form" action="">
			<h3 class="">忘记密码 ?</h3>
			<p>快登录你的邮箱找回密码.</p>
			<div class="control-group">
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-envelope"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="邮箱" name="email" />
					</div>
				</div>
			</div>
			<div class="form-actions">
				<button type="button" id="back-btn" class="btn">
				<i class="m-icon-swapleft"></i> 返回
				</button>
				<button type="submit" class="btn green pull-right">
				提交 <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		</form>
		<form class="form-vertical register-form" action="registered.php" method="post" enctype="multipart/form-data">
			<h3 class="">注册</h3>
			<p>请输入你的账号信息:</p>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">用户名</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="用户名" name="username"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">密码</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" id="register_password" placeholder="密码" name="password"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">确认密码</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="m-wrap placeholder-no-fix" type="password" placeholder="确认密码" name="rpassword"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">邮箱</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-envelope"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="邮箱" name="email"/>
					</div>
				</div>
			</div>
            <div class="form-radio">
                <input class="radio" type="radio" value="admin" name="check" checked/>商家
                <input class="radio" type="radio" value="user" name="check" />用户
            </div>
			<div class="control-group">
				<div class="controls">
					<label class="checkbox">
						<!--I agree to the Terms of Service Privacy Policy-->
					<input type="checkbox" name="tnc"/> 我同意 <a href="#">服务条款</a> 和 <a href="#">隐私权</a>
					</label>  
					<div id="register_tnc_error"></div>
				</div>
			</div>
			<div class="form-actions">
				<button id="register-back-btn" type="button" class="btn">
				<i class="m-icon-swapleft"></i>  返回
				</button>
				<input type="submit" value="注册" name="reg_sub" class="btn green pull-right">
<!--				<button type="submit" name="reg_sub" id="register-submit-btn" class="btn green pull-right">-->
<!--				注册 <i class="m-icon-swapright m-icon-white"></i>-->
<!--				</button>            -->
			</div>
		</form>
	</div>
	<script src="media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="media/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="media/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>
	<script src="media/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="media/js/app.js" type="text/javascript"></script>
	<script src="media/js/login.js" type="text/javascript"></script>      
	<script>
	$(function(){
		App.init();
		Login.init();
	});
	</script>
</body>
</html>