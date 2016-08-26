<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Public/css/admin.css" />
    <link href="/em/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"/></script>
    <script type="text/javascript" charset="utf-8" src="/em/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/em/umeditor.min.js"></script>
    <script type="text/javascript" src="/em/lang/zh-cn/zh-cn.js"></script>
	<script type="text/javascript" src="/Public/js/edit.js"></script>
</head>
<body>
	<div class="contrace">
		<div class="input-title">
			<input name="title" placeholder="在这里输入标题" type="text" maxlength="30" />
		</div>
		<script id='myUm'></script>
		<div class="submit-nav"><button url="<?php echo U('Wen/doAddWen');?>" class="sub-btn" >提交</button></div>
	</div>
</body>
</html>