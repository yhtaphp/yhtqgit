<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<link rel="stylesheet" type="text/css" href="/Public/css/admin.css" />
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"/></script>
	<script type="text/javascript" src="/Public/js/admin.js"></script>
	</head>
<body>
	<div class="contrace">
		<div class="botton">
		<form method="post" action="<?php echo U('Photo/doup');?>" enctype="multipart/form-data">
			<input id="btn" type="file" name="Filedata" class="button" />
			<input type="submit" value="上传"/>
		</form>
		</div>
	</div>
</body>
</html>