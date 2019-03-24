<?php
	require_once 'sqlHelper.class.php';
	$sqlHelper=new SqlHelper();
	$id=$_REQUEST['id'];
	$sql = "delete from info where id=$id";
	$sqlHelper->execute_dml($sql);
	header("Location:ok1.php");
	exit();

?>
