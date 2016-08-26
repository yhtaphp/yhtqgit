<?php
namespace Admin\Controller;
use Common\Controller\AuthController;

class WenController extends AuthController{
	public function Index(){
		
	}
	public function Wenlist(){
		
		$count = M('mycontent') -> join('__USER__ on __MYCONTENT__.uid = __USER__.id') -> count();		
		$page = new \Think\Page($count,10);
		$pageShow = $page -> show();
		$wenList = M('mycontent') -> join('__USER__ on __MYCONTENT__.uid = __USER__.id') ->order('mycontent.ctime desc') -> limit($page -> firstRow.','.$page -> listRows) -> field(array('user.user','mycontent.*')) -> select();
		//var_dump($pageShow);
		$this -> assign('list',$wenList);
		$this -> assign('page',$pageShow);
		$this -> display();
	}
	
	// this add article
	public function addWen(){
		
		$this -> display();
	}
	
	public function doAddWen(){
		if (IS_POST){
			$path = ROOT.C('WEN_ROOT').date('ym').'/';
			if ( !is_dir($path)){ mkdir($path,0777,true);}
			$path = file_exists($path)?$path.time().rand(0,9).'.html':$path.time().'.html';
			$con = I('post.content',0,'');
			$wArr['title'] = I('post.title',0,'htmlspecialchars,addslashes');
			$wArr['shart'] = I('post.shart',0,'htmlspecialchars,addslashes');
			$wArr['path'] = $path;
			$wArr['ctime'] = time();
			$wArr['hot'] = 0;
			$wArr['uid'] = session('uid');
			$s = M('mycontent') -> data($wArr) -> add();
			$f = file_put_contents($path,$con);
			if (!$s || !$f){
				if ( $s){ M('mycontent') -> del(array('wid'=>$s)); }
				if ( $f){	unlink($path);	}
				echo 0;
			}else{
				echo $s;
			}
		}else{
			echo 0;
		}
	}
	
	// 编辑文章信息
	public function Edit(){
		$sArr['wid'] = I('get.wid',0,'htmlspecialchars,addslashes');
		echo empty($sArr['wid']);
		if ( empty($sWarr['wid']) == false){ echo 'error'; exit;}
		$db = M('mycontent');
		
		$dArr = $db -> where($sArr) -> find();
		if ( empty($sArr)){ echo 'select error'; exit; }
		
		$con = file_get_contents($dArr['path']);
		//$con = str_repeat('\n','<br/>',$con);
		
		$this -> assign('wid',$dArr['wid']);
		$this -> assign('title',$dArr['title']);
		$this -> assign('con',$con);
		$this -> display();
	}
	public function doEdit(){
		if (!IS_POST){ echo -1; exit;}
		
		$con = I('post.content',0,'');
		$id = I('post.wid',0);
		$wArr['title'] = I('post.title',0,'htmlspecialchars,addslashes');
		$wArr['shart'] = I('post.shart',0,'htmlspecialchars,addslashes');
		
		$db = M('mycontent') ;
		$sArr = $db -> where(array('wid' => $id)) -> find();
		$s = M('mycontent') -> where(array('wid' => $id)) -> save($wArr);
		//var_dump($wArr);
		$f = file_put_contents($sArr['path'],$con);
		if (!$s || !$f){
			echo 0;
		}else{
			echo $s;
		}
	}
	// 删除文章数据
	public function WenDel(){
		$wid = I('post.wid',0,'htmlspecialchars,addslashes');
		$db = M('mycontent');
		if ( !$wid){ echo -1; exit;	}
		
		$sArr = $db -> where(array('wid' => $wid)) -> find();
		if ( empty($sArr)){	echo -2; exit;}
		
		$del = $db -> where(array('wid' => $wid)) -> delete();
		if ( empty($del)){	echo -3; exit;	}
		M('pl') -> where(array('wid' => $wid)) -> delete();
		$path = isset($sArr['path'])?$sArr['path']:'';
		if ( !unlink($path)){	echo 0; exit;}
		echo 1;
	}
	
}