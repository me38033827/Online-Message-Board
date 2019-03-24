<?php
    require_once 'sqlHelper.class.php';
    class AdminService{
       public $username;
       public $password;
       public $flag=FALSE;
       public function checkAdmin($username,$password){
           $sqlHelper=new SqlHelper();
           $sql="select * from admin where name='$username'";
           $res=$sqlHelper->execute_dql($sql);
 
	for($i=0;$i<count($res,COUNT_NORMAL);$i++){
  		if($password==$res[$i]['password']){
                   $this->flag=TRUE;}}
           	return $this->flag;
       }
    }
?>