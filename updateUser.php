<?php 
    
    include 'pdo.php';
    header("Content-type:text/html;charset=utf-8");
	//获取的id
	$id = null;

	if($_GET['id'] != null){
		$id = $_GET['id'];
	}
	
	$username = $_GET['username'];
	$password = $_GET['password'];
	$birth = $_GET['birth'];
	$createtime = date('Y-m-d');

	//连接mysql数据库
	//$pdo = new PDO('mysql:host=ns2m2jkl.2106.dnstoo.com;port=4010;dbname=phptest1234','phptest1234_f','mysql1234');
	//本地mysql
	//$pdo = new PDO('mysql:host=localhost;dbname=php','root','mysql');
	
	
	//设置提交的编码格式
	//$pdo 变量在 pdo.php 中设置
	$pdo -> exec('set names utf8');
	//查询所用到的sql语句
	if($_GET['id'] != null){
		$sql = "update user set username='{$username}',password='{$password}',birth='{$birth}',createtime='{$createtime}' where id='{$id}'";
	}else{
		$sql = "insert into user(username,password,birth,createtime) values('{$username}','{$password}','{$birth}','{$createtime}')";
	}
	

	if($pdo -> exec($sql)){
		echo "操作成功!等待3秒返回列表!";
	}else{
		echo "操作失败!等待3秒返回列表!";
		
	}

 ?>
<script type="text/javascript">

　　setTimeout("window.location.href='index.php'",3000);

</script>