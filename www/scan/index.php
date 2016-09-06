<!doctype>
<html>
<head>
	<?php include("db/db.php"); ?>
	<title>默-信息查询工具</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	<link href="css/style.css" rel="stylesheet"/>
</head>
<body>
	<?php 
	try{
		$oArr = array();
		
		$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$qu = $db -> query("select id,name from option order by otime");
		
		if ( !$qu) { 	throw new PDOException("option数据库错误或者没有数据");	}
		
		while( $r = $qu -> fetch(PDO::FETCH_ASSOC)){
			$oArr[] = $r;
		}
	}catch(PDOException $err){
		echo $err -> getMessage();
	}
	?>

	<div class="subject">
		<div class="head">
			<a class="head-list" href="install.php" target="main">添加</a>			
			<a class="head-list" target="main" href="./slient/select.php">查询</a>
			<a class="head-list" target="main" href="tools/index.php">工具</a>
		</div>
		<div class="left">
			<ul>
				<?php foreach ( $oArr as $key => $val){ if ( !is_array($val)){	continue;} ?>
				<a href="slient/list.php?oid=<?php echo isset($val['id'])?$val['id']:''; ?>" target="main"> <li> <?php echo isset($val['name'])?$val['name']:''; ?></li> </a>
				<?php } ?>
			</ul>
		</div>
		<div class="right">
			<iframe name="main" src="greet.php" >
		</div>
	</div>
</body>
</html>