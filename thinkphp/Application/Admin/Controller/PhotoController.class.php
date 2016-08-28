<?php
namespace Admin\Controller;
use Common\Controller\AuthController;
class PhotoController extends AuthController {
    public function index(){
			$this -> display();
	}
	public function upload(){
		
		$val = M("phgroup") -> select();
		
		$this -> assign("photo",$val);
		$this -> display();
	}
	public function doup(){
		
		
		$root = '/Public/images';		// 文件保存的目录
		
		$db = M("photo");
		
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     '.'.$root; // 设置附件上传根目录
		$upload->savePath  =     '/'.date("ym").'/'; // 设置附件上传（子）目录
		// 上传文件 
		$info   =   $upload->upload();
		$va['ptime']	= time();
		$va['ip']		= get_client_ip();
		$va['gid']		= intval(I("post.photo","addslashes,htmlspecialchars"));
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{// 上传成功
			
			$va['path'] = $root.$info['Filedata']['savepath'].$info['Filedata']['savename'];
			 $add = $db-> data($va) -> add();
			$this->success("文件上传成功");
		}
	}
	// 添加相册
	public function photoAdd(){
		
		
		if ( !IS_POST){
			$this -> display();
			return 0;
		}
		$db = M("phgroup");
		$val['group'] = I("post.photo","addslashes,htmlspecialchars");
		$val['gtime'] = time();
		$add = $db -> add($val);
		if ( $add){
			echo '<script>confirm("创建成功")</script>';
			header("location:".U("photo/photoAdd"));
		}
	}
}