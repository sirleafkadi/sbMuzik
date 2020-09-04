<?php 
////Importing Classes
require_once('templets/init.php');
require_once('model.php');

class View extends Model{
 /////Creating refernce Member variables
 
   
//////////Creating Objects of all classes with default constructor

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


public function get_ajax__pdo(){
   
   return parent::get_pdo();
}



///////Get all beats
public function get_beats($which){
///////////checking Which type to call
if($which=="new_release") {
   try{
/////Calling New release method
   $row = parent::new_release("call sbmuzik_db.new_release();");
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
}

public function get_cat_view(){
   ///////////checking Which type to call
  
      try{
   /////Calling New release method
      $row = parent::get_cat_model("call sbmuzik_db.get_categories()");
      if( gettype($row)!="string"){
         
         foreach($row as $item){
            $cat_id=$item['category_id'];
            $cat_name=$item['category_name'];
               ////////Checking If Beat Is Sold
            include'app/views/category.php';
      }
   }
   else{ throw new Exception($row); }
   }catch(Exception $e){
         echo $e->getMessage();
    }
   
///////END||GET_Cat////////////////
}

public function get_totalbeats($sql){
   ///////////checking Which type to call
   $total=0;
   try{
   /////Total Beats
      $row = parent::get_total_beats($sql);
      if( gettype($row)!="string"){
         return $row;
      }
   else{ throw new Exception($row); }
   }catch(Exception $e){
         echo $e->getMessage();
    }
   
}









 //////END OF CLASS////////   
}















?>