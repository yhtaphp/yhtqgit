<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>默 - 后台</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/admin.css" />
</head>
<body>
		<div style="width:100%; height: 100%; position:relative;">
		<div class="header">
			<div class="title">
				<h3><a href="<?php echo U('Index/Index');?>">默 - 后台</a></h3>
			</div>
			<!--title end-->
			<div class="item">
				<ul>
					<li><a href="<?php echo U('Login/destroy');?>">注销</a></li>
				</ul>
			</div>
			<!--item end-->
		</div>
		<!--header end-->
		
			<div class="left">
				<ul class="menu-left">
				</ul>
					<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menuVal): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($menuVal['url']);?>" target="main"><?php echo ($menuVal["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<!--left end-->
			
			<div class="right">
				<iframe class="iframe" name="main" src="<?php echo U('Index/Main');?>" />
			</div>
			<!--right end-->
	</div>
</body>
</html>