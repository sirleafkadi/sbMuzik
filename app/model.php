<?php 
require_once('protected/database.php');

class Model extends Db{
static $pdo;
static $db_msg;
static $list =array(); 
//////Checking database For Errors
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

////New Release

protected function new_release($sql){


try{
  
    $row = static::$pdo->query($sql);
    
    
    return $row;
 }catch(PDOException $e){
    $_SESSION['db_msg']="<h5 style='color:red'> Database Error <br/>".$e->getMessage()."</h5>";
    return $_SESSION['db_msg'];
  }
//////END////////
}




///////END OF CLASS
}

?>