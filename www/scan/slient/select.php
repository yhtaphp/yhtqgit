<?php include("../db/db.php"); ?>
<br>
<form method="post">
	<textarea name="val" cols="100" rows="20"></textarea><br>
	<input type="submit" value="GO"/>
</form>

<br>
<hr>
<?php 
try{
	$str = isset($_POST['val']) && !empty($_POST['val'])?trim($_POST['val']):false;
	$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	if ( !$str){ echo "接受数据错误<br>"; exit; }
	
	$r = $db -> query($str);
	if ( !$r) { echo "执行数据库语句失败<br>"; var_dump($r); exit; }
	while( $s = $r -> fetch(PDO::FETCH_ASSOC)){
		var_dump($s);
	}
	
}catch(PDOException $err){
	echo "错误信息：".$err -> getMessage();
}
?>