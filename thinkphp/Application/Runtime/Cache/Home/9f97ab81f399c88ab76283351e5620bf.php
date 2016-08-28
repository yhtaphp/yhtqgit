<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title><?php echo ($title); ?>-<?php echo ($web_title); ?></title>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css" />
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<div class="contrace">		
		<div class="header">
			<div class="web_title"><span><?php echo ($web_title); ?></span></div>
			<div class="qianming"><span><?php if(isset($qianming)): echo ($qianming); endif; ?></span></div>
			<div class="nav">
				<ul>
					<li><a href="<?php echo U('Index/Index');?>">首页</a></li>
				</ul>
			</div>
		</div>
		<div class="content"><?php echo ($content); ?></div>
		
		<!-- 评论区 -->
		<div class="pl">
			<div class="pl-in">
				<form onsubmit="return false" id="form" action="<?php echo U('View/doPl');?>">
					<table>
						<tr>
							<td width="50px"><span>*邮箱:</span></td>
							<td><input name='email' type=''text' maxlength="20" value='' /></td>
						</tr>
						<tr>
							<td align="top"><span>内容:</span></td>
							<td><textarea id="con" class="pl-con"></textarea></td>
						</tr>
						<tr>
							<td colspan='2' align="right"><input id="submit" type='submit' value="回复"/></td>
						</tr>
					</table>
				</form>
			</div>
			<div class="pl-out">
				<ul>
					<?php if(is_array($out)): $i = 0; $__LIST__ = $out;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($vo["email"]); ?>：<?php echo ($vo["con"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<div class="page"><?php echo ($page); ?></div>
			</div>
		</div>
		<div class="footer">底部</div>
	</div>
	<script>
		$(document).ready(function(){
			$("#submit").click(function(){
				var url = $("form").attr("action");
				$.ajax({
					contentType:"application/x-www-form-urlencoded;charset=utf-8",
					url:url,
					type:"post",
					data:{
						wid:"<?php echo ($wid); ?>",
						email:$("input[name=email]").val(),
						con:$("#con").val()
					},
					success:function( data){
						switch(data){
							case '1': confirm("回复成功"); setTimeout(function(){$("#con").attr('value',' ');$("input[name=email]").attr('value',' '); window.location.reload();},500); break;
							default: alert("系统发生错误"); break;
						}
					},
					error:function(){
						alert("失败");
					}
					
				});
			});
		});
	</script>
</body>
</html>