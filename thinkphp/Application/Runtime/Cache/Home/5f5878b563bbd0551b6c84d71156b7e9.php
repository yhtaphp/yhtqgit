<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title><?php echo ($web_title); ?></title>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css" />
</head>
<body>

	<div class="contrace">
		<div class="header">
			<div class="web_title"><span><?php echo ($web_title); ?></span></div>
			<div class="qianming"><span><?php if(isset($qianming)): echo ($qianming); endif; ?></span></div>
			<div class="head-logo"><img src='/Public/images/logo-back.jpg'></div>
			<div class="nav">
				<ul>
					<li><a href="<?php echo U('Index/Index');?>">首页</a></li>
				</ul>
			</div>
		</div>
		<!-- header  end-->
		<div class="content">
			
			<div class="left">
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lvo): $mod = ($i % 2 );++$i;?><div class="list-con">
					<div class="title"><h3><a href="<?php echo U('View/Index',array('wid' => $lvo['wid']));?>"><?php echo ($lvo["title"]); ?></a></h3></div>
					<div class="con"><p><?php echo ($lvo["shart"]); ?></p></div>
					<div class="yuedu"><a href="<?php echo U('View/Index',array('wid' => $lvo['wid']));?>">阅读全文 >></a></a></a></div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="page"><?php echo ($page); ?></div>
			</div>
			<!-- left end -->
			
			<div class="right">
				<div class="toux center"><img src="http://os.blog.163.com/common/ava.s?host=yhtqduan&b=2&r=1460559405561"/></div>
				<div class="uInfo">
					<div class="user">
						<a class="name" href="<?php echo U('Index/about');?>"><?php echo ($uInfo["name"]); ?></span>
						<span class="qianm"><?php echo ($uInfo["qianming"]); ?></span>
					</div>
					<table>
						<tr> <td></td> <td></td> </tr>
					</table>
				</div>
			</div>
			<!-- left end -->
		</div>
		<!-- content end -->
		
		<div class="footer">
			
		</div>
	</div>
</body>

</body>
</html>