<?php
    //����һ�������࣬��������ɶ����ݿ�Ĳ���
    class SqlHelper{
        
        
        public function execute_dql($sql){
            $mysql = new SaeMysql();
			$res=$mysql->getData($sql);
			$mysql->closeDb();
            return $res;
            //
        }  
        //ִ��dml���
        public function execute_dml($sql){
			$mysql = new SaeMysql();
			$mysql->setCharset("gbk");
			$mysql->runSql($sql);
			if($mysql->errno()!=0){
				die("Error:".$mysql->errmsg());
			}
			$mysql->closeDb();
        }
    }
?>