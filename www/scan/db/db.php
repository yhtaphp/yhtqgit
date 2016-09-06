<?php
try {
	header("content-type:text/html;charset=utf-8");
	$db_root = pathinfo(__FILE__,PATHINFO_DIRNAME);
	$db = new PDO("sqlite:$db_root\\content.db",$user = '', $pwd = '');
}catch(Exception $err){
	echo "error msg:".$err -> getMessage();
}

?>