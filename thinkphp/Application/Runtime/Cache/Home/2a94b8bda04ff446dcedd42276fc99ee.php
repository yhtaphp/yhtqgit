<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title><?php echo ($web_title); ?></title>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css" />
</head>
<body>
	<div class=""></div>
	<div class="contrace">
		<div class="header">
			<div class="web_title"><span><?php echo ($web_title); ?></span></div>
			<div class="qianming"><span><?php if(isset($qianming)): echo ($qianming); endif; ?></span></div>
			<div class="head-logo"><img src='/Public/images/logo-back.jpg'></div>
			<div class="nav">
				<ul>
					<li><a href="<?php echo U('Index/Index');?>">首页</a></li>
					<li><a href="<?php echo U('Index/photo');?>">相册</a></li>
					<li><a href="<?php echo U('Index/about');?>">关于我</a></li>
				</ul>
			</div>
		</div>
		<!-- header  end-->
		<div class="content">
			
			<div class="left">
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lvo): $mod = ($i % 2 );++$i;?><div class="list-con">
					<div class="title">
						<div class="t center-t"><span class="m">May</span><span class="d"><?php echo (date("d",$lvo["ctime"])); ?></span></div>
						<h3 class="h3"><a href="<?php echo U('View/Index',array('wid' => $lvo['wid']));?>"><?php echo ($lvo["title"]); ?></a></h3>
					</div>
					<div class="con"><p><?php echo ($lvo["shart"]); ?></p></div>
					<div class="yuedu"><a href="<?php echo U('View/Index',array('wid' => $lvo['wid']));?>">阅读全文 >></a></a></a></div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="page"><?php echo ($page); ?></div>
			</div>
			<!-- left end -->
			
			<div class="right">
				<div class="toux left-t"><img src="http://os.blog.163.com/common/ava.s?host=yhtqduan&b=2&r=1460559405561"/></div>
				<div class="uinfo">
						<a class="name" href="<?php echo U('Index/about');?>"><?php echo ($info["name"]); ?></a>
						<span class="qianm"><?php echo ($info["qianming"]); ?></span>
						<table>
							<tr> <td class="open">学历:</td> <td><?php echo ($info["xuel"]); ?></td> </tr>
							<tr> <td class="open">职业:</td> <td><?php echo ($info["zhiy"]); ?></td> </tr>
							<tr> <td class="open">技能专长:</td> <td><?php echo ($info["jinzc"]); ?></td> </tr>
							<tr> <td class="open">QQ:</td> <td><?php echo ($info["qq"]); ?></td> </tr>
							<tr> <td class="open">E-Mail:</td> <td><?php echo ($info["email"]); ?></td> </tr>
						</table>
				</div>
			</div>
			<!-- left end -->
		</div>
		<!-- content end -->
		
		<div class="footer center-t">
			<span>@2015</span>
		</div>
	</div>
</body>

</body>
</html>