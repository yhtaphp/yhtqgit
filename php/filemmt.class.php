<?php
class M_man{
	
	public $dir;
	public $dArr;
	
	
	// 构造函数， $dir为网站的根目录
	
	function __construct($dir){
		$this -> dir = $dir;
		if ( !is_dir($dir) && !chdir($dir)){
			return false;
		}
		$dir = $this -> setPath($dir);
		$this -> opDir($dir);
	}
	
	// 打开目录
	function opDir($dir){
		
		$dArr = array();
		
		$d = opendir($dir);
		if ( !$d){	return false; }
		
		while( $resulte = readdir($d) ){
			if ( $resulte == '..' || $resulte == '.') {	continue ;}
			
			if (is_dir($dir.'/'.$resulte)){
				$dArr['dir'][] = $resulte;
			}else if(is_file($dir.'/'.$resulte)){
				$dArr['file'][] = $resulte;
			}
		}
		closedir($d);
		$this -> dArr = $dArr;
	}
	// 设置路径
	function setPath($dir){
		
		$d1 = '';
		$d2 = '';
		$d3 = '';
		
		$dir = str_replace("\\","/",$dir);
		
		$d1 = isset($_SESSION['dir'])?$_SESSION['dir']:'/';
		
		if (isset($_GET['dir']) && !empty($_GET['dir'])){
			$d2 = trim($_GET['dir']);
		}
		
		if ( isset($d2) && $d2 == '..'){
			// 去掉路径的最后一个目录， 标示返回上一级目录
			$dArr = explode("/",$d1);
			unset($dArr[count($dArr)-1]);
			$d3 = implode("/",$dArr);
			
		}else if ( !empty($d2)){
			
			$path = $dir.$d1.'/'.$d2;
			$d3 = is_dir($path) ? $d1.'/'.$d2 : $_SESSION['dir'];
		
		}else{
			$d3 = $d1;
		}
		
		$_SESSION['dir'] = $d3;
		return $dir.$d3;
		
	}
	// 显示列表
	function show(){
		
		$dArr = $this -> dArr;
		
		if ( isset($dArr['dir'])){
			foreach($dArr['dir'] as $val){
				echo "<a href='?dir=$val'>$val</a><br>";
			}
		}
		if ( isset($dArr['file'])){
			foreach($dArr['file'] as $val){
				echo "$val<br>";
			}
		}
		echo '<hr>';
		echo "<a href='?dir=..'>上级目录</a><br>";
	
	}
	
}