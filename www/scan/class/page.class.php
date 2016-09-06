<?php
include("../db/db.php");
// 分页类

class Page{
	
	private $max;		// 一页的最大数据
	private $table;		// 查询的表
	
	public $pageNum;	// 当前页 乘以最大 $max
	public $page;		// 当前页数
	public $liArr;		// 获取的数据库数据
	public $maxPage;	// 最大页数
	
	function __construct($max = 10,$table = ''){
		if ( empty($table)){
			echo "请输入操作的数据表";
			return false;
		}
		
		$this -> max	= $max; 
		$this -> table	= $table; 
		
		$this -> pageNum = $this -> getPage($table);
	}
	
	// 获取数量
	private function getCount($table){
		global $db;
		try{
			
			$oid = sprintf("%u",intval(isset($_GET['oid'])?$_GET['oid']:0));
			$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
			$count = $db -> query("select count(*) from $table where oid='$oid'") -> fetch(PDO::FETCH_ASSOC)['count(*)'];
			if ( !$count) {	throw new PDOException("获取表的行数失败");}
			
		}catch(PDOException $err){
			echo $err -> getMessage();
			return 0;
		}
		return $count;
	}
	
	// 获取列表
	public function getList($sql){
		
		global $db;
		
		try{
			$liArr = array();
			$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$tiObj = $db -> query($sql);
			
			if ( !$tiObj) {	throw new PDOException("标题列表获取失败");}
			
			while( $r = $tiObj -> fetch(PDO::FETCH_ASSOC)){
				$liArr[] = $r;
			}
		}catch(PDOException $err){
			echo $err -> getMessage();
			return 0;
		}
		$this -> liArr = $liArr;
	}
	
	// 获取页数并返回
	private function getPage($table){
		$max	= $this -> max;
		$count	= $this -> getCount($table);
		$page	= sprintf("%u",intval(isset($_GET['page'])?$_GET['page']:0));
		$this -> maxPage = $maxPage = ($count / $max)?intval($count / $max):intval($count / $max) +1;
		$this -> page = $page = ($page > $maxPage)?$maxPage:$page;
		
		//echo '$max:';var_dump($max);echo '<br>';
		//echo '$count:';var_dump($count);echo '<br>';
		//echo '$page:';var_dump($page);echo '<br>';
		//echo '$maxPage:';var_dump($maxPage);echo '<br>';
		return ($page*$max);	echo '<br>';
	}
	// 显示分页
	public function showPage($href){
		
		$num = 10;
		$maxPage = $this -> maxPage;
		$page = $this -> page;
		$i = $page < (int)($num /2)?0:$page - $num /2;
		for ( ;$i <= $maxPage;$i++){
			echo "<a href='$href&page=$i'>".($i+1)."</a>";
		}
		
	}
}

?>