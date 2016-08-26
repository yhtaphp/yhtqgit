<?php
namespace Admin\Controller;
use Common\Controller\AuthController;

class PlController extends AuthController{
	public function Index(){
		
		$db = M('pl');
		$count = $db -> count();
		$page = new \Think\Page($count,10);
		$pageShow = $page -> show();
		
		$plList = $db -> order('ptime desc') -> limit($page-> firstRow.','.$page -> listRows) -> select();
		
		$this -> assign('plList',$plList);
		$this -> assign('page',$pageShow);
		$this -> display();
	}
	public function Del(){
		
		$id = isset($_POST['id']) || !empty($_POST['id'])?addslashes($_POST[id]):0;
		if ( $id == 0){ echo -1; exit; }
		$s = M('pl') ->where('id = '.$id) -> delete();
		if ($s){
			echo $s;
		}else{
			echo $s;
		}
	}
	
	public function View(){
		
		$wid = I('get.wid','addslashes',0);
		$id = I('get.id','addslashes',0);
		$webTitle = M("web_info") -> find();
		$userInfo = M('user-info')	->	find();
		$wenCon = M("mycontent") -> where(array('wid'=>$wid)) -> find();
		$con = file_get_contents($wenCon['path']);
		
		$plDb = M("pl");
		$getPl = $plDb -> join("__MYCONTENT__ on __PL__.wid = __MYCONTENT__.wid") -> where(array('pl.id'=>$id,'pl.wid'=>$wid)) -> limit (1) -> select();
		
		$this -> assign('out',$getPl);
		$this -> assign("content",$con);
		$this -> display();
	}
}