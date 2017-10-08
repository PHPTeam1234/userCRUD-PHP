<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>用户列表</title>
  <link rel="stylesheet" type="text/css" href="/CRUD/Public/BootStrap/css/bootstrap.min.css">
  <script type="text/javascript" src="/CRUD/Public/BootStrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="/CRUD/Public/BootStrap/js/bootstrap.min.js"></script>
  <link href="/CRUD/Public/Bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="/CRUD/Public/Datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>
<body>

  <div class="container">
    <div class="page-header">
      <h3><?php echo ($row[id]?修改用户:新增用户); ?></h3>
    </div>
    <div>

      <form action="/CRUD/index.php/Home/User/update" method="post">

        <?php if(empty($row[id]) != true): ?><input type='hidden' name='id' value='<?php echo ($row[id]); ?>'><?php endif; ?>

       <div class="form-group">
         <label for="usernameInput">用户名</label>
         <?php if(empty($row[id]) == true): ?><input type="text" class="form-control" id="usernameInput" name="username" placeholder="用户名" >
          <?php else: ?>
          <input type="text" class="form-control" id="usernameInput" name="username" value="<?php echo ($row[username]); ?>"><?php endif; ?>
      </div>

      <div class="form-group">
        <label for="passwordInput">密码</label>
        <?php if(empty($row[id]) == true): ?><input type="password" class="form-control" id="passwordInput" name="password" placeholder="密码">
          <?php else: ?>
          <input type="password" class="form-control" id="passwordInput" name="password" value="<?php echo ($row[password]); ?>"><?php endif; ?>
      </div>

      <div class="form-group">
        <label for="dtp_input2">生日</label>
        <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" >
          <?php if(empty($row[id]) == true): ?><input class="form-control" size="10" type="text" name="birth" readonly>
            <?php else: ?>
            <input class="form-control" size="10" type="text" name="birth" value="<?php echo ($row[birth]); ?>" readonly><?php endif; ?>
          <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
      </div>
      <button type="submit" class="btn btn-default">提交</button>
    </form>
  </div>
</div>

<script type="text/javascript" src="/CRUD/Public/BootStrap/js/jquery.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="/CRUD/Public/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/CRUD/Public/Datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="/CRUD/Public/Datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
<script type="text/javascript">
  var dd = new Date();
  $('.form_date').datetimepicker({
        language: 'zh-CN',
        weekStart: 0,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0,
        endDate: dd  //设置可选取的最大时间
    });
  
</script>

</body>
</html>