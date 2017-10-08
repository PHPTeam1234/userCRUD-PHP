<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       $user=M("User");
       $user->create();
       $this->rows = $user->order('id asc')->select();
       $this->display();
    }
}