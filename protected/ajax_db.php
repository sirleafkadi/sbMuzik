<?php 
require_once('../app/view.php');
class Ajax_db extends View{

private $pdo;
private $sc;
function __construct(){
    $do= new PDO('mysql: host=localhost; port=3308; dbname=sbmuzik_db; charset=utf8', 'developer', 'Moneymoney27');
    $do->setAttribute(PDO::ATTR_ERRMODE, 
    PDO::ERRMODE_EXCEPTION); 

    $this->pdo=$do;
}

    


public function get_ajax__pdo(){

   return $this->pdo;
}

public function get_total($sql){

    return parent::get_totalbeats($sql);
 }



 





}/////END OF CLASS


?>