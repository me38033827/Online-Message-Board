<?php
	require_once 'sqlHelper.class.php';
	$sqlHelper=new SqlHelper();
	$name=$_REQUEST['name'];
	$password=$_REQUEST['password'];
	$password1=$_REQUEST['password1'];
	if($password==""||$password==""){
		header("Location:regist.php?errno=2");
       exit();
	}else if($password!=$password1){
		header("Location:regist.php?errno=1");
       exit();
	}
	$sql = "insert into admin values('null','$name','$password')";
	$sqlHelper->execute_dml($sql);
	header("Location:index.php?errno=2");
	exit();

?>
