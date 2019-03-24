<html>
<head>
<meta http-equiv="content-type"content="text/html;charset=utf-8"/>
<title>
留言板</title>
<script type="text/javascript">
<!--//
	function showInfo(info){
		return window.confirm("是否要删除id为"+val+"的留言");
	}

-->
</script>
<body background="images/1.jpg">
</head>
<?php
	require_once 'infoService.class.php';
	$infoService=new InfoService();
	$res=$infoService->getInfo();
	echo"<table align='center' width='700px'bordercolor='silver'cellspacing='0px'border='1px'>";
	echo"<tr><th>id</th><th>留言者</th><th>留言时间</th><th>留言对象</th><th>内容</th><th>重要程度</th><th>删除</th></tr>";
	for($i=0;$i<count($res,COUNT_NORMAL);$i++){
		echo"<tr><td>".$res[$i]['id']."</td><td>".$res[$i]['name']."</td><td>".$res[$i]['time']."</td><td>".$res[$i]['target']."</td><td>".$res[$i]['info']."</td><td>".$res[$i]['level']."</td><td><a onclick='return confirmDele({$res[$i]['id']})'href='delInfoProcess.php?id={$res[$i]['id']}'>删除</td></tr>";

	}
	echo"<h1 style='text-align:center'>留言板</h1><br/>";
	echo"<h3 style='text-align:center'><a href='addInfo.php'>留言</a></h3>";
	echo"</table>";
	if(count($res,COUNT_NORMAL)==0){
		echo"<h1 style='text-align:center'><font color='red'>留言板为空！</font></h1><br/>";
	}
	
?>
</body>
</html>