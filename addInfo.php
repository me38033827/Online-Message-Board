<html>
<head>
<link rel="stylesheet"type="text/css"href="addInfo.css"/>
</head>
<body background="images/1.jpg">

<h1 style='text-align:center'>����</h1>
<form action="addInfoProcess.php"method="post"align="center">
������:&nbsp<input type="text"name="name"/><br/>
���Զ���:<input type="text"name="target"/><br/>
��������:<br/><textarea name="info"cols="40px"rows="10px"></textarea><br/>
������Ҫ�̶ȣ�<br/>
<select name="level">
<option value="high">����</option>
<option value="mid">�е�</option>
<option value="low">������</option>
</select><br/>
�Ƿ���Ҫ�ʼ�֪ͨ���Զ���:<br/>
<input type="radio"name="email"value="yes">��&nbsp&nbsp&nbsp&nbsp
<input type="radio"name="email"value="no">��<br/>
�ռ��������ַ:<input type="text"name="eadd"/><br/>
<input type="submit" value="�ύ">&nbsp&nbsp<input type="reset" value="������д">
</form>
<h3 style='text-align:center'><a href='panel.php'>�������԰�</a></h3>
</body>
</html>