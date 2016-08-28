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
		<div >
			<center> <h3>关于我们</h3></center>
			<p>我是一名来自农村的程序员，因为个人的爱好，就进入IT行业。</p>
			<p>自从高中毕业以来，做了好几个web系统 ，虽然不是什么拿得出手的东西，但是这些系统都见证了我的悬系历程。其次，我的目标并不在web开发上，而是在c/c++
			上，因为我想成为一名网络安全人员</p>
			<p>虽然我没有上过大学， 但是我会努力， 努力过了， 不留遗憾。 想做什么就，立马去做，全心全意的去做，就算失败了也不会后悔，因为我做过了， 努力过了。 这也是我在第一家公司学到的东西。</p>
		</div>
		<div class="footer center-t">
			<span>@2015</span>
		</div>
	</div>
</body>	
</html>