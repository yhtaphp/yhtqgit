<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){
	
		$webTitle = M("web_info") -> limit(1) -> find();
		$count = M("mycontent") -> join('__USER__ on __MYCONTENT__.uid = __USER__.id') -> field(array('user.user','mycontent.*')) -> count();
		// 分页
		$page = new \Think\Page($count,10);
		$pageShow = $page -> show();
		$listCon = M("mycontent") -> join('__USER__ on __MYCONTENT__.uid = __USER__.id') -> order("mycontent.ctime desc") -> field(array('user.user','mycontent.*')) -> limit($page->firstRow.','.$page->listRows) -> select();
		// 用户信息
		$uInfo = M("user-info") ->limit(1) -> find(); 
		
		$this -> assign("info",$uInfo);
		$this -> assign('list',$listCon);
		$this -> assign('qianming',$uInfo['qianming']);
		$this -> assign('web_title',$webTitle['title']);
		$this -> assign('page',$pageShow);
		$this -> display();
	}
	
	public function about(){
		
	}
	
	public function photo(){
		
	}
    public function msg(){
	}
	
	public function md5A(){
		echo md5($_POST['name']);
	}
}