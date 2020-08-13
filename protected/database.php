<?php 

class Db{


protected function start_db(){

try{
    $db_list=array();
    $pdo = new PDO('mysql: host=localhost; port=3308; dbname=sbmuzik; charset=utf8', 'developer', 'Moneymoney27');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
    $db_list['pdo']=$pdo;
    $db_list['db_msg']="";
    return $db_list;
}catch(PDOException $e){
  $db_list['pdo']="";
  $db_list['db_msg']="<h6 style='color:red;   word-wrap: break-word; text-align:center; margin-top: 20%'>Database Error: "."<br><br/>".$e->getMessage().'</h6>';
   
    return $db_list;
    }

  }

}


?>