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
		$webTitle = M("web_info") -> limit(1) -> find();			// 获取网站标题
		
		$this -> assign('web_title',$webTitle['title']);
		$this -> display();
	}
	
	public function photo(){
		// 相册
		$webTitle = M("web_info") -> limit(1) -> find();			// 获取网站标题
		
		$count = M("photo") -> join("__PHGROUP__ on __PHOTO__.gid = __PHGROUP__.id") -> count();
		
		$page = new \Think\Page($count,10);		// 实例化分页类
		$pageShow = $page -> show();
		//  获取相册数据库
		$ph = M("photo") -> join("__PHGROUP__ on __PHOTO__.gid = __PHGROUP__.id") -> limit($page->firstRow.','.$page->listRows) -> select();
		
		$this -> assign('web_title',$webTitle['title']);
		$this -> assign("photo",$ph);
		$this -> display();
	}
    public function msg(){
	}
	
	public function md5A(){
		echo md5($_POST['name']);
	}
}