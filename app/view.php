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
   $row = parent::new_release("call sbmuzik_db.get_beats();");
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

public function get_totalbeats(){
   ///////////checking Which type to call
   $total=0;
   try{
   /////Total Beats
      $row = parent::get_total_beats("select name from products where products.sold=false ");
      if( gettype($row)!="string"){
         
         foreach($row as $item){
            ++$total;
      }
$_SESSION['total_beats']=$total;
      return $total;
   }
   else{ throw new Exception($row); }
   }catch(Exception $e){
         echo $e->getMessage();
    }
   
}

////////////Get_all_beats////////

public function get_all_beats($filter){
  
      try{
   /////Calling get beats method
   $pages=1;
   $total_rows=$this->get_totalbeats();
   $rows_per_page =2;
  $offset=($pages-1)*$rows_per_page;
  $total_pages = ceil($total_rows/$rows_per_page);
   $row = parent::get_beats("call sbmuzik_db.pigination($offset, $rows_per_page)");
   $_SESSION['total_rows']=$total_rows;
   $_SESSION['rows_per_page']=$rows_per_page;

   if( gettype($row)!="string"){

      if($filter==false) {
         foreach($row as $item){
            $name=$item['name']; $pro_name=$item['full_name'];  $pro_name=$item['full_name']; $img=$item['img_name']; 
            $type=$item['type']; $sold=$item['sold']; $id=$item['product_id']; $category=$item['category_name'];
               ////////Checking If Beat Is Sold
                if($sold==false){ include'app/views/beats copy.php';}
                }
               }
               elseif($filter){

                   for( $page=1; $page<=$total_pages; $page++){
                  echo '<option class="option" value="'.$page.'"> <span>Page </span>'.$page.'</option>';
                }
            }
   }
   else{ throw new Exception($row); }
   }catch(Exception $e){
         echo $e->getMessage();
    }
   
///////END////
}






 //////END OF CLASS////////   
}















?>