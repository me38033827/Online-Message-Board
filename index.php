<html>
<head>
<meta http-equiv="content-type"content="text/html;charset=utf-8"/>
<title>记事本</title>
<link rel="stylesheet"type="text/css"href="login.css"/>
</head>
<body>
<div class="top">
<img src="images/top.gif"></div>
<div class="logo">
<img src="images/logo.jpg">
</div>
<div class="login">
<h1 style="text-align:center">用户登录</h1>
<form action="loginProcess.php"method="post">
<table align="center">
<tr><td>用户名：</td><td><input type="text"name="username"></td></tr>
<tr><td>密码：</td><td><input type="password"name="password"></td></tr>
<tr><td><input type="submit"value="登录"></td><td><input type="reset"value="重新填写"></td></tr>
<tr><td colspan="2"><a href="regist.php"><b>注册</b></a></td></td></tr>
</table>
</form>
<?php 
   if(!empty($_GET['errno'])){
       $errno=$_GET['errno'];
       if($errno==1){
       echo"<br/><font color='red'size='3'>用户名或者密码错误</font>";
       }
	   else if($errno==2){
       echo"<br/><font color='red'size='3'>注册成功</font>";
       }else if($errno==3){
       echo"<br/><font color='red'size='3'>用户名或密码不能为空！</font>";
       }}
    
?>
<br/><br/><br/><br/><br/><br/>
<font color="red">注：<br/>1.新用户需要注册才能进入留言板<br/>2.测试用账户名为：zh<br/>&nbsp&nbsp密码为：admin<br/>3.留言如需邮件通知，请输入正确的邮箱地址<br/>4.由于sae的原因邮件会延迟10分钟左右才能接收到。</font>
</div>
</body>

</html>