<!doctype html>
<html>
<head>
	<?php include("../db/db.php"); include("../class/page.class.php"); ?>
	<link href="../css/style.css" rel="stylesheet"/>
</head>
<body>
	<?php
	
	$oid = sprintf("%u",intval(isset($_GET['oid'])?$_GET['oid']:0));
	$maxSize = 10;
	$page = new Page($maxSize,'title');
	$nu = $page -> pageNum;
	$page -> getList("select id,title,ttime from title where oid='$oid' order by ttime desc limit $nu,$maxSize");
	
	
	?>
	<div>
		<ul>
			<?php foreach( $page -> liArr as $val){  if ( !is_array($val)){ continue; } ?>
			<a href="view.php?oid=<?php echo $oid; ?>&tid=<?php echo isset($val['id'])?$val['id']:0; ?>"><li><?php echo isset($val['title'])?$val['title']:0; ?> </li> </a>
			<?php } ?>
		</ul>
	</div>
	<div class="page">
	<?php $page -> showPage("?oid=$oid"); ?>
	</div>
</body>
</html>