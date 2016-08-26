<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css" />
</head>
<body>
	<div class="contrace">		
		
		<div class="content"><?php echo ($content); ?></div>
		
		<!-- 评论区 -->
		<div class="pl">
			<div class="pl-out">
				<ul>
					<?php if(is_array($out)): $i = 0; $__LIST__ = $out;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($vo["email"]); ?>：<?php echo ($vo["con"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		
	</div>
</body>
</html>