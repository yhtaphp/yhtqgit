<?php
namespace Admin\Controller;
use Common\Controller\AuthController;
class IndexController extends AuthController {
    public function index(){
		$menu = $this -> getMenu();
		$this -> assign('menu',$menu);
		$this -> display();
	}
	
	public function Main(){
		echo "<h2>欢迎访问后太管理系统</h2>";
	}
	
	private function myCheck(){
		
	}
	private function getMenu(){
		$menu = array(
			array('url'=>'Wen/Wenlist','title' => '文章列表'),
			array('url'=>"Pl/Index",'title'=>"评论管理"),
			array('url'=>"Photo/Index",'title'=>"相册管理")
		);
		return $menu;
	}
}