<?php
    require_once 'adminService.class.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $adminService=new AdminService();
	if($username==""||$password==""){
		header("Location:index.php?errno=3");
		exit();
		}
    else if($adminService->checkAdmin($username, $password)){
       header("Location:panel.php?name=$username");
       exit();
    }else{
        header("Location:index.php?errno=1");
        exit();
    }

?>