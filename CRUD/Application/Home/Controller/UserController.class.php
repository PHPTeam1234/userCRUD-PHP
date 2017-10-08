<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
       
    }

    public function delete(){
    	$user=M("User");
        $user->delete($_GET['id']);

    	$this->redirect('Index/index');
    }

    public function update(){
    	$user=M("User");
    	$user->create();

    	if($_POST['id'])
    	{
    		//在插入date数据时，mysql 不允许插入''，手动设置为null
    		$user->birth = ($user->birth)?$user->birth:NULL;
    		$user->save();
    	}else{
    		$user->createtime = date('Y-m-d');
    		$user->birth = ($user->birth)?$user->birth:NULL;
    		$user->add();
    	}
    	$this->redirect('Index/index');
    }

    public function userInfo(){
    	$user=M('User');
    	$user->create();
    	$this->row = $user->find($_GET['id']);
        $this->display();
    }

    public function insert(){
    	$this->display('userInfo');
    }
}