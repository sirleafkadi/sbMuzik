<?php 
////Importing Classes
require_once('templets/init.php');
require_once('model.php');




class View extends Model{
 /////Creating refernce Member variables
    private $init;
//////////Creating Objects of all classes with default constructor
function __construct(){
   $this->init= new Init();


}
/////////Storing objects of all classes except MVC
public function objects(){
$list=array();
$list['init']=$this->init;

return $list;
}

/////Checking Database For Errors//////////    
public function check_db(){
     $db_msg  = parent::db_info();
     return $db_msg;
    }
}

?>