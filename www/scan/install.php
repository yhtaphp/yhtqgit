<?php

// 这里的代码就不做优化了
include('db/db.php');
try{
	$arr = array('option' => 0,'optionadd'=> 0,'title'=> 0,'con'=> 0);
	
	// 获取option的id和name
	$o = $db -> query('select id,name from option');
	while ( $r = $o -> fetch(PDO::FETCH_ASSOC)){
		$oArr[] = $r;
	}
	// 设置pdo警报
	$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	// 开启事务
	$db -> beginTransaction();
	if ( !isset($_POST['option'])){ throw new PDOException(""); }
	foreach( $_POST as $key => $val){
		if ( is_array($val)) { throw new PDOException($key.":是数组"); continue; }
		if ( !isset($arr[$key])) { throw new PDOException($key.":不存在");continue;	}
		$str = htmlspecialchars(addcslashes($val,"'"));
		$arr[$key] = str_replace("\n","<br>",$str);
	}
	$oid = $arr['option'];
	$optionadd = $arr['optionadd'];
	$title = $arr['title'];
	$con = $arr['con'];
	$time = time();
	unset($arr);
	
	// 选项为空 ， 添加的选项不为空时
	if (empty($opton) && !empty($optionadd) ){
		// 向option表插入数据 
		$opSql = "select max(id) from option";
		$re = $db -> query($opSql);
		$oid = $r = $re -> fetch(PDO::FETCH_ASSOC)["max(id)"] + 1;
		$opSql = "insert into option values ('$oid','$optionadd','$time')";
		if ( !$db -> exec($opSql) ){	throw new PDOException("选项写入失败");}
	}
	if ( empty($title) || empty($con) ){	throw new PDOException("题目和内容没有添加");	}
	// title表插入数据
	$tiSql = "insert into title (oid,title,ttime) values ('$oid','$title','$time')"; 
	if ( $db -> exec($tiSql)){
		$tid = $db -> query("select max(id) from title") -> fetch(PDO::FETCH_ASSOC)['max(id)'];
	}
	// content表插入数据
	$coSql = "insert into content (tid,content,ctime) values ('$tid','$con','$time')"; 
	if ( !$db -> exec($coSql)){ 	echo "内容没有插入成功"; }
	
	
	// 提交事务
	$db -> commit();
//	echo $sql;
	
}catch(PDOException $err){
	echo $err -> getMessage();
}
?>
<br>
<form method="post">
	选项：<select name="option">
		<option value="0"></option>
		
		<?php if (isset($val)){ unset($val) ;} foreach ( $oArr as $key => $val){	?>
		<option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
		<?php } ?>
		
	</select>
	<input type="text" name="optionadd" value=""/><br>
	标题：<input type="text" name="title" value=""/>
	<input type="submit" value="go"/>
	<br><br>
	内容：<br>
	<textarea name="con" value="" cols="100" rows="20" wrap="hard"></textarea>
</form>