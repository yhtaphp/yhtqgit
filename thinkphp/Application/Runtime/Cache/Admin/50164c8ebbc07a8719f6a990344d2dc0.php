<?php if (!defined('THINK_PATH')) exit();?><html>  
<head>
	<link rel="stylesheet" type="text/css" href="/Public/css/admin.css" /> 
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/js/edit.js"></script> 
</head>
<body>
	<div class="contrace">
		<div class="top-nav">
			<a href="<?php echo U('Wen/addWen');?>">
				<span>添加文档</span>
			</a>
		</div>

		<!-- 表格显示列表 -->
		<table class="table">
			<tr><th>id</th><th>标题</th><th>用户</th><th>时间</th><th>点击</th><th>操作</th></tr>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($vo["wid"]); ?></td>
				<td><?php echo ($vo["title"]); ?></td>
				<td><?php echo ($vo["user"]); ?></td>
				<td><?php echo (date("Y-m-d H:i",$vo["ctime"])); ?></td>
				<td><?php echo ($vo["hot"]); ?></td>
				<td>	<a href="<?php echo U('Wen/Edit',array('wid'=>$vo['wid']));?>">编辑</a> <a href="<?php echo U('Wen/WenDel');?>" id="<?php echo ($vo["wid"]); ?>" class="del"  onclick="return delData(this)">删除</a>	</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			<tr>
				<td colspan="6" align="center" class="page"><?php echo ($page); ?></td>
			</tr>
		</table>
	<div>
</body>
</html>