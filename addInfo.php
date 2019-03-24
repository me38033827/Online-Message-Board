<html>
<head>
<link rel="stylesheet"type="text/css"href="addInfo.css"/>
</head>
<body background="images/1.jpg">

<h1 style='text-align:center'>留言</h1>
<form action="addInfoProcess.php"method="post"align="center">
留言者:&nbsp<input type="text"name="name"/><br/>
留言对象:<input type="text"name="target"/><br/>
留言内容:<br/><textarea name="info"cols="40px"rows="10px"></textarea><br/>
留言重要程度：<br/>
<select name="level">
<option value="high">紧急</option>
<option value="mid">中等</option>
<option value="low">不紧急</option>
</select><br/>
是否需要邮件通知留言对象:<br/>
<input type="radio"name="email"value="yes">是&nbsp&nbsp&nbsp&nbsp
<input type="radio"name="email"value="no">否<br/>
收件人邮箱地址:<input type="text"name="eadd"/><br/>
<input type="submit" value="提交">&nbsp&nbsp<input type="reset" value="重新填写">
</form>
<h3 style='text-align:center'><a href='panel.php'>返回留言板</a></h3>
</body>
</html>