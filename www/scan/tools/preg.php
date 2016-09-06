<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=gbk" />
</head>
<body>
<form method="post">
	正则：<input type="text" name="preg" value="" width="90%"/><br>
	测试字符:<br><textarea name="val" value="" cols="150" rows="20"></textarea><br>
	<input type="submit" name="" value="go"/><br>
</form>
<hr>
<?php
	try{
		if ( !isset($_POST['val'])){	throw new Exception(""); }
		$preg = isset($_POST['preg'])? trim($_POST['preg']): '';
		$val = file_get_contents("http://www.booktxt.net/0_147/1303717.html");
		
		$s = preg_match($preg,$val,$m);
		echo "状态：$s <br>";
		echo "<pre>";
		var_dump($m);
		echo "</pre>";
	}catch(Exception $err){
		echo $err -> getMessage();
	}
?>

</body>
</html>