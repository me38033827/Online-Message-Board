<?php
	require_once 'sqlHelper.class.php';
	$sqlHelper=new SqlHelper();
	$name=$_POST['name'];
	$target=$_POST['target'];
	$info=$_POST['info'];
	$level=$_POST['level'];
	$isemail=$_POST['email'];
	$eadd=$_POST['eadd'];
	
	$time=date('Y-m-d H:i:s',time());
	$sql = "insert into info values('null','$name','$time','$info','$target','$level')";
	$sqlHelper->execute_dml($sql);
	if($isemail=="yes"&&$eadd!="")
	{$to = $_POST['eadd'];;
	$subject = "message board";
	$info="you have a message on message board";
	 $mail = new SaeMail();
	$ret = $mail->quickSend("$to","$subject","$info",'pkuzhcloud@sina.com','zhao919'); 
	if ($ret == false)
		{$errno=$mail->errno();
		$errmsg=$mail->errmsg();
		header("Location:fail.php?errno=$errno&errmsg=$errmsg");
		}
		else{
			header('Location:ok.php?email=1');
			exit();}
	}else{
	header("Location:ok.php");
	exit();}

?>

