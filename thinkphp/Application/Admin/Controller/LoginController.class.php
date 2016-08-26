<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
	public function Index(){
		
		if (IS_POST){
			$uArr['user'] = substr(I('post.user',0,'addslashes,htmlspecialchars'),0,50);
			$uArr['pwd'] = substr(I('post.pwd',0,'addslashes,htmlspecialchars,md5'),0,50);
			
			$status = '';
			if (empty($uArr['user'])){
				$status = "用户名不能为空!!!";
			}else if(empty($uArr['pwd']) || $uArr['pwd'] == md5('')){
				$status = "密码不能为空！！！";		// 用md5加密时，空字符也有加密
			}
			if ( !($uInfo = M('user') -> where($uArr) -> limit(1) -> select())){
				$status = "用户名或者密码错误！！！";
			}
			
			if (empty($status) && !empty($uInfo[0]['id'])){
				session('uid',$uInfo[0]['id']);
				$this -> redirect('Index/Index','',3,'登录成功，正在<a href="'.U('Index/Index').'">跳转</a>。。。');
			}else{
				$status = "用户信息获取错误!!";
			}
			$this -> assign('msg',$status);
			
		}
		$this -> assign('status',$status);
		$this -> display();
	}
	public function destroy(){
		session_destroy();
		if (empty($_SESSION['uid'])){
			$this -> success('注销成功！！！','http://'.$_SERVER['HTTP_HOST'],2);
		}else{
			$this -> error('注销失败！！！',U('Index/Index'),2);
		}
	}
}