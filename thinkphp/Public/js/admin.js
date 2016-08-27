$(document).ready(function(){
	
	$(".btn-img").click(function(){
		var btn = document.getElementById("btn");
		btn.click();
	});
	$("#btn").change(function(){
		$(".show").attr("src",window.URL.createObjectURL(document.getElementById("btn").files[0]));
		alert("文件选择的内容改变了");
	});

});
