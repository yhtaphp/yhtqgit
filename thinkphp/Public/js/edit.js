$(document).ready(function(){
		var um = UM.getEditor('myUm');
		um.setWidth('100%');
		um.setHeight(400);

		// submit values
		$(".sub-btn").click(function(){
			var th = $(this);
			th.text('load');
            $.ajax({
				contentType:"application/x-www-form-urlencoded;charset=utf-8",
				url:$(this).attr('url'),
				type:"post",
				data:{
					title:$("input[name=title]").val(),
                    shart:um.getContentTxt().substring(0,100),
					content:um.getContent()
				},
				success:function(data,status){
					switch(data){
						case '0': th.text('发表失败'); break;
						default: th.text('提交成功'); $("input[name=title]").attr('value',' '); window.location.reload(); break;
					}
				}

			}); // ajax end
            
		});
	});
// 删除数据
function delData(obj){
	if (confirm("确定要删除吗？")){
		var id = obj.id;
		$.ajax({
			url:obj.href,
			contentType:"application/x-www-form-urlencoded;charset=utf-8",
			type:"post",
			data:{wid:id},
			success:function(data){
				switch(data){
					case '0': alert('清楚文件异常'); window.location.reload();	break;
					case '1': confirm("删除成功"); window.location.reload();break;
					case '-1': alert("数据库异常"); window.location.reload();break;
					case '-2': alert("查询数据库异常"); break;
					case '-3': alert("删除数据库信息异常"); window.location.reload(); break;
					default: alert('异常操作'); break; 
				}
			},
			error:function(data){
				
			}
		});
	}
		
	return false;
}
