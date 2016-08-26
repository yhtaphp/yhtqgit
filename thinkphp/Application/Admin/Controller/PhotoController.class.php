<?php
namespace Admin\Controller;
use Common\Controller\AuthController;
class PhotoController extends AuthController {
    public function index(){
			$this -> display();
	}
	public function upload(){
		$this -> display();
	}
	public function doup(){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     './Public/images'; // 设置附件上传根目录
		$upload->savePath  =     '/'.date("ym").'/'; // 设置附件上传（子）目录
		// 上传文件 
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{// 上传成功
			var_dump($info);
			//$this->success("文件上传成功");
		}
	}
}