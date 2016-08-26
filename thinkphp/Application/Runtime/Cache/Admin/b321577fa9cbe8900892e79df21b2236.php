<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<link rel="stylesheet" type="text/css" href="/Public/css/admin.css" />
    <link href="/em/themes/default/css/umeditor.css" type="text/css" rel="stylesheet"/>
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"/></script>
    <script type="text/javascript" charset="utf-8" src="/em/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/em/umeditor.min.js"></script>
    <script type="text/javascript" src="/em/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
	<div class="contrace">
		<div class="input-title">
			<input name="title" value="<?php echo ($title); ?>" placeholder="在这里输入标题" type="text" maxlength="30" />
		</div>
		<script id='myUm'></script>
		<div class="submit-nav"><button url="<?php echo U('Wen/doEdit');?>" class="sub-btn" >提交</button></div>
	</div>
	<script>
		var um = UM.getEditor('myUm');
		um.setWidth('100%');
		um.setHeight(400);
		um.ready(function () {
			um.execCommand('insertHtml','<?php echo ($con); ?>');
		});
			$(".sub-btn").click(function(){
			var th = $(".sub-btn");
			th.text('load');
            $.ajax({
				contentType:"application/x-www-form-urlencoded;charset=utf-8",
				url:th.attr('url'),
				type:"post",
				data:{
					wid:'<?php echo ($wid); ?>',
					title:$("input[name=title]").val(),
                    shart:um.getContentTxt().substring(0,100),
					content:um.getContent()
				},
				success:function(data,status){
				switch(data){
						default: th.text('更新成功'); setTimeout(function(){window.location.href="<?php echo U('Wen/WenList');?>"},500);; break;
					}
				},
				error:function(){
					th.text('更新失败');
					setTimeout(function(){th.text('更新')},900);
				}

			}); // ajax end
            
		});
	</script>
</body>
</html>