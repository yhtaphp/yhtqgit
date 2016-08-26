<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<link rel="stylesheet" type="text/css" href="/Public/css/admin.css" />
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<div class="contrace">
		<table>
			<tr>
				<th>id</th>
				<th>邮箱</th>
				<th>内容</th>
				<th>时间</th>
				<th>ip</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($plList)): $i = 0; $__LIST__ = $plList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($vo["id"]); ?></td>
			<td><?php echo ($vo["email"]); ?></td>
			<td><?php echo (substr($vo["con"],0,20)); ?>...</td>
			<td><?php echo (date("Y-m-d H:i",$vo["ptime"])); ?></td>
			<td><?php echo ($vo["ip"]); ?></td>
			<td>
				<a href="<?php echo U('Pl/View',array('wid'=>$vo['wid'],'id'=>$vo['id']));?>">查看</a>
				<a href="<?php echo U('Pl/Del');?>" id="<?php echo ($vo["id"]); ?>" onclick="return del(this)">删除</a>
			
			</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			<tr><td colspan="6"><?php echo ($page); ?></td></tr>
		</table>
	</div>
	<script>
	function del(obj){
		var url = $(obj).attr('href');
		var id = $(obj).attr('id');
		$.ajax({
			contentType:"application/x-www-form-urlencoded;charset=utf-8",
			url:url,
			type:"post",
			data:{id:id},
			success:function(data){
				switch(data){
					case '1':confirm("成功删除");setTimeout(function(){window.location.reload();},100); break;
					default:alert("系统错误1"); break;
				}
			},
			error:function(){
				alert("系统错误");
			}
		});
		return false;
	}
	</script>
</body>
</html>