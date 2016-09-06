<?php
include("db/db.php");
$result = $db -> exec("inset into option (rowid,id,title,otome) values ('1','1','天域苍穹','1267890')");
var_dump($result);
while ($r = $result -> fetch(PDO::FETCH_ASSOC)){
	var_dump($r);
}

?>
