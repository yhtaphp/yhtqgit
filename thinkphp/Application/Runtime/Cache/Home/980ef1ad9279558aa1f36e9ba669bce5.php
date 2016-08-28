<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css" />
</head>

<body>
	<div class="contrace">
	<div class="header">
			<div class="web_title"><span><?php echo ($web_title); ?></span></div>
			<div class="qianming"><span><?php if(isset($qianming)): echo ($qianming); endif; ?></span></div>
			<div class="nav">
				<ul>
					<li><a href="<?php echo U('Index/Index');?>">首页</a></li>
					<li><a href="<?php echo U('Index/photo');?>">相册</a></li>
					<li><a href="<?php echo U('Index/about');?>">关于我</a></li>
				</ul>
			</div>
		</div>
		<ul>
			<?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <img src="<?php echo ($vo["path"]); ?>"/> <span>相册:<?php echo ($vo["group"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</body>	
</html>