<html>
<head>
<meta http-equiv="content-type"content="text/html;charset=utf-8"/>
</head>
<?php
	require_once 'sqlHelper.class.php';
	class InfoService{
	public $res;
	public function getInfo(){
	$sqlHelper=new SqlHelper();
	$sql = "select * from info";
	$this->res=$sqlHelper->execute_dql($sql);
	return	$this->res; 
	}
	}
?>
</html>