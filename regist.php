<html>
<head>
<meta http-equiv="conetent-type"content="text/html;charset=utf-8"/>
</head>
<body background="images/1.jpg">
<h1 style="text-align:center">注册</h1>
<form action="addAdminProcess.php"method="post"align="center">
用户名：&nbsp<input type="text"name="name"/><br/><br/>
密&nbsp&nbsp码：<input type="password"name="password"/><br/><br/>
密码确认：<input type="password"name="password1"><br/><br/>
<input type="submit" value="提交">&nbsp&nbsp&nbsp&nbsp<input type="reset" value="重新填写">
</form>
<?php 
   if(!empty($_GET['errno'])){
       $errno=$_GET['errno'];
       if($errno==1){
       echo"<br/><h3 style='text-align:center'><font color='red'size='3'>密码不一致</font></h3>";
       }else if($errno==2){
       echo"<br/><h3 style='text-align:center'><font color='red'size='3'>用户名或密码不能为空</font></h3>";
       }
	   }
    
?>
<h3 style='text-align:center'><a href='index.php'>返回首页</a></h3>
</body>
</html>