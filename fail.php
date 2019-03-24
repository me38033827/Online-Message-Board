<html>
<head>
<meta http-equiv="conetent-type"content="text/html;charset=utf-8"/>
</head>
<body background="images/1.jpg">
<?php
	 
        $errno=$_GET['errno'];
		$errmsg=$_GET['errmsg'];
		echo"发送邮件失败，仅留言成功，失败原因为:$errmsg<br/>";
		echo"<a href='panel.php'>返回留言板</a>";
?>
</body>
</html>