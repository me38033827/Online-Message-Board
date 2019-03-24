<html>
<head>
<meta http-equiv="conetent-type"content="text/html;charset=utf-8"/>
</head>
<body background="images/1.jpg">
<?php
	 if(!empty($_GET['email'])){
       $email=$_GET['email'];
       if($email==1){
	   echo"<h1 style='text-align:center'>邮件发送成功!</h1>";
	   echo"<h1 style='text-align:center'>留言成功!</h1>";
	   echo"<h1 style='text-align:center'><a href='panel.php'>返回留言板</a></h1>";

	   }}else{
	   echo"<h1 style='text-align:center'>留言成功!</h1>";
	   echo"<h1 style='text-align:center'><a href='panel.php'>返回留言板</a></h1>";

	 }
?>
</body>
</html>