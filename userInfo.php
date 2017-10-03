
<?php 

   include 'pdo.php';
  //获取的id
  $id = null;
 

  if($_GET['id'] != null){
    $id = $_GET['id'];
  }

   if($_GET['id'] != null){

  //连接mysql数据库
  //$pdo = new PDO('mysql:host=ns2m2jkl.2106.dnstoo.com;port=4010;dbname=phptest1234','phptest1234_f','mysql1234');
  
  //本地mysql
  //$pdo = new PDO('mysql:host=localhost;dbname=php','root','mysql');
  

  //设置提交的编码格式
  //$pdo 变量在 pdo.php 中设置
  $pdo -> exec('set names utf8');
  //查询所用到的sql语句
  $sql = "select * from user where id='{$id}'";
  //预查询
    $smt=$pdo -> query($sql);
    //查询所有列(正序排列)，将结果保存至rows中
    $rows=$smt -> fetchAll(PDO::FETCH_ASSOC);
  
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户列表</title>
	<link rel="stylesheet" type="text/css" href="BootStrap/css/bootstrap.min.css">
 	<script type="text/javascript" src="BootStrap/js/jquery.min.js"></script>
 	<script type="text/javascript" src="BootStrap/js/bootstrap.min.js"></script>
</head>
<body>



	<div class="container">
		<div class="page-header">
      <?php 
        if($id != null){
          echo "<h3>修改用户</h3>";
        }else{
          echo "<h3>新增用户</h3>";
        }
       ?>
    </div>
		<div>
		 
			<form action="updateUser.php">
        <?php 
          if($id != null){
            echo "<input type='hidden' name='id' value='{$id}'>";
          }
         ?> 
               <div class="form-group">
                 <label for="usernameInput">用户名</label>
                 <input type="text" class="form-control" id="usernameInput" name="username" placeholder="用户名" <?php if($id != null){ echo "value='{$rows[0]['username']}'";} ?>>
               </div>
               <div class="form-group">
                  <label for="passwordInput">密码</label>
                  <input type="password" class="form-control" id="passwordInput" name="password" placeholder="密码" <?php if($id != null){ echo "value='{$rows[0]['password']}'";} ?>">
               </div>
              <div class="form-group">
                  <label for="birthInput">生日</label>
                  <input type="text" class="form-control" id="birthInput" name="birth" placeholder="生日" <?php if($id != null){ echo "value='{$rows[0]['birth']}'";} ?>">
                  
              </div>
  
              
                  <button type="submit" class="btn btn-default">提交</button>
               </form>
		</div>
	</div>
</body>
</html>