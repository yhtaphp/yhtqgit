<?php
namespace Common\Controller;
use Think\Controller;
class AuthController extends Controller{
	
	public function _initialize(){
		if ( !isset($_SESSION['uid']) && empty($_SESSION['uid'])){
			$this -> redirect('Login/Index','',3,'正在跳转到登陆页面');
		}
		
	}
}