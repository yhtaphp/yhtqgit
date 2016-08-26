<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>登录-后台</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css" />
</head>
<body>
	<div class="contrace">
		<div class="login">
			<div class="title center"><h3>后台 登陆</h3></div>
			<div class="msg"><span><?php echo ($msg); ?></span></div>
			<div>默认用户登录信息已经输入</div>
			<form method="post">
				<div class="form-title">User name :</div>
				<div class="input"><input type='text' name="user" maxlength='20' value='admin'/></div>
				<div class="form-title">Password : </div>
				<div class="input"><input type='password' name="pwd" maxlength='20' value='duan***'/></div>
				<div class="submit center"><input type='submit' value='Login'/></div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="/Public/js/login.js"></script>
</body>
</html>