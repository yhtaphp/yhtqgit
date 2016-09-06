<!doctype html>
<html>

<head>
<?php include("../db/db.php"); ?>
<link href="../css/style.css" rel="stylesheet"/>
</head>
<body>
<?php 
try{
	$oid = sprintf("%u",intval(isset($_GET['oid'])?$_GET['oid']:0));
	$tid = sprintf("%u",intval(isset($_GET['tid'])?$_GET['tid']:0));

	$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$oObj = $db -> query("select name from option where id='$oid' limit 1");
	$oName = $oObj ? $oObj -> fetch(PDO::FETCH_ASSOC)['name']:'NULL';
	$conArr = $db -> query("select t.title,c.content,c.ctime from title t,content c where c.tid=t.id and t.id='$tid' limit 0,1") -> fetch(PDO::FETCH_ASSOC);
}catch(PDOException $err){
	echo $err -> getMessage();
}

?>
	<div class="subject">
		<div class="top">当前位置：<?php echo $oName.'>'; ?></div>
		<br>
		<center><?php echo isset($conArr['title'])? $conArr['title']: 'NULL'; ?></center>
		<br>
		<div class="con">
			<pre><?php echo stripslashes(isset($conArr['content'])? $conArr['content']: 'NULL'); ?></pre>
		<div>
		
	</div>
</body>
</html>
