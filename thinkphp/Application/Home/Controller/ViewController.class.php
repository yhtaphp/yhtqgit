<?php
namespace Home\Controller;
use Think\Controller;
class ViewController extends Controller{
	
	public function Index(){
		
		$wid = I('get.wid','addslashes',0);
		$webTitle = M("web_info") -> find();
		$userInfo = M('user-info')	->	find();
		$wenCon = M("mycontent") -> where(array('wid'=>$wid)) -> find();
		$con = file_get_contents($wenCon['path']);
		
		$num = isset($wenCon['hot'])?$wenCon['hot'] + 1:$wenCon['hot'];
		M("mycontent") -> where(array('wid' => $wid)) ->  save(array('hot' => $num));
		
		$plDb = M("pl");
		$count = $plDb -> join("__MYCONTENT__ on __PL__.wid = __MYCONTENT__.wid") -> where(array('pl.wid'=>$wid))-> count();
	
		$page = new \Think\Page($count,5);			// 分页
		$pageShow = $page -> show();
		
		$getPl = $plDb -> join("__MYCONTENT__ on __PL__.wid = __MYCONTENT__.wid") -> where(array('pl.wid'=>$wid)) -> limit ($page -> firstRow.','.$page -> listRows) -> select();
		
		$this -> assign('out',$getPl);
		$this -> assign('page',$pageShow);
		$this -> assign('wid',$wid);
		$this -> assign('qianming',$userInfo['qianming']);
		$this -> assign('web_title',$webTitle['title']);
		$this -> assign("content",$con);
		$this -> display();
	}
	
	public function doPl(){
		if (!IS_POST){
			echo 'no post';
			exit;
		}
		$iArr['wid'] = I('post.wid',0,'htmlspecialchars,addslashes');
		$iArr['email'] = I('post.email',0,'htmlspecialchars,addslashes');
		$iArr['con']= I('post.con',0,'htmlspecialchars,addslashes');
		$iArr['ptime'] = time();
		$iArr['ip'] = get_client_ip();
		foreach($iArr as $key => $val){
			if (empty($val)){ echo 'error:'.$key;exit;}
		}
		$r = M("pl") -> data($iArr) -> add();
		if ( !$r){
			echo "-1";
		}else{
			echo '1';
		}
	}
}