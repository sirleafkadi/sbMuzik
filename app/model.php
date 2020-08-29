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

protected function get_cat_model($sql){
try{
    $row = static::$pdo->query($sql);
    return $row;
 }catch(PDOException $e){

    $_SESSION['db_msg']="<h5 style='color:red'> Database Error <br/>".$e->getMessage()."</h5>";
    return $_SESSION['db_msg'];
    
  }
//////END////////
}

//////////////////Get All Beats/////////

protected function get_beats($sql){
   try{
       $row = static::$pdo->query($sql);
       return $row;
    }catch(PDOException $e){
   
       $_SESSION['db_msg']="<h5 style='color:red'> Error: can't get beats!  <br/>".$e->getMessage()."</h5>";
       return $_SESSION['db_msg'];
       
     }
   //////END////////
   }

   ///////////Get Total
   protected function get_total_beats($sql){
      try{
          $row = static::$pdo->query($sql)->fetchColumn();
          return $row;
       }catch(PDOException $e){
      
          $_SESSION['db_msg']="<h5 style='color:red'> Error: can't get total number of beats!  <br/>".$e->getMessage()."</h5>";
          return $_SESSION['db_msg'];
          
        }
      //////END////////
      }


////////Getting PDO object for Ajax Call/////
public function  get_pdo(){
        return static::$pdo;
}



///////END OF CLASS
}

?>