<?php
    //这是一个工具类，作用是完成对数据库的操作
    class SqlHelper{
        
        
        public function execute_dql($sql){
            $mysql = new SaeMysql();
			$res=$mysql->getData($sql);
			$mysql->closeDb();
            return $res;
            //
        }  
        //执行dml语句
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