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



public function get_beats($which){
///////////checking Which type to call
if($which=="new_release") {
   try{
/////Calling New release method
   $row = parent::new_release($this->init->get_beats());
   if( gettype($row)!="string"){
      
      foreach($row as $item){
         $beat_name=$item['name']; $pro_name=$item['full_name'];  $pro_name=$item['full_name']; $img=$item['img_name']; 
         $type=$item['type']; $sold=$item['sold']; $id=$item['product_id']; $category=$item['category_name'];
            ////////Checking If Beat Is Sold
         if($sold==false){ include('app/views/new_release.php');}
   }
}
else{ throw new Exception($row); }
}catch(Exception $e){
      echo $e->getMessage();
 }

}
////////END||NEW Release




 ///////END||GET_BEATS
}









 //////END OF CLASS////////   
}















?>