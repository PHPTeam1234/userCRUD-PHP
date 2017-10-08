<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户列表</title>
	<link rel="stylesheet" type="text/css" href="/CRUD/Public/BootStrap/css/bootstrap.min.css">
 	<script type="text/javascript" src="/CRUD/Public/BootStrap/js/jquery.min.js"></script>
 	<script type="text/javascript" src="/CRUD/Public/BootStrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h3>用户列表</h3>
		</div>
		<div>
			<a class="btn btn-success" href="/CRUD/index.php/Home/User/insert">+新增用户</a>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<th>序号</th>
					<th>用户名</th>
					<th>密码</th>
					<th>出生日期</th>
					<th>创建时间</th>
					<th>修改</th>
					<th>删除</th>
				</tr>
					 <?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
						 <td><?php echo ($row[id]); ?></td>
						 <td><?php echo ($row[username]); ?></td>
						 <td><?php echo ($row[password]); ?></td>
						 <td><?php echo ($row[birth]); ?></td>
						 <td><?php echo ($row[createtime]); ?></td>
						 <td><a class='btn btn-default' href='/CRUD/index.php/Home/User/userInfo?id=<?php echo ($row[id]); ?>'>修改</a></td>
						 <td><a class='btn btn-danger' href='/CRUD/index.php/Home/User/delete?id=<?php echo ($row[id]); ?>'>删除</a></td>
						 </tr><?php endforeach; endif; ?> 
			</table>
		</div>
	</div>
</body>
</html>