<?php 
require_once('protected/database.php');

class Model extends Db{
static $pdo;
static $db_msg;
static $list =array(); 

protected function db_info(){
    static::$list=parent::start_db();
    static::$pdo = static::$list['pdo'];
    static::$db_msg = static::$list['db_msg'];

     if(static::$db_msg!=""){
        return static::$db_msg;
    }else{ 
           return null;
     }
} 















}

?>