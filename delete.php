<?php 
	//获取的id
	$id = null;

	if($_GET['id'] != null){
		$id = $_GET['id'];
	}

	//连接mysql数据库
	$pdo = new PDO('mysql:host=ns2m2jkl.2106.dnstoo.com;port=4010;dbname=phptest1234','phptest1234_f','mysql1234');
	//设置提交的编码格式
	$pdo -> exec('set names utf8');
	//查询所用到的sql语句
	if($id != null){
		$sql = "delete from user where id = {$id}";	
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