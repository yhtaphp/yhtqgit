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
			<input id="btn" type="file" name="Filedata" class="button"/>
			<select name="photo">
				<option selected value="0">-请选择相册-</option>
				<?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["id"]); ?>"><?php echo ($val["group"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<input type="submit" value="上传"/>
		</form>
		</div>
		<div class="btn-img view-img-one content">
			<img class="show" />
		</div>
	</div>
</body>
</html>