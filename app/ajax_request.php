<?php 
require('../protected/ajax_db.php'); 
 
$db=new Ajax_db(); $pdo=$db->get_ajax__pdo();?>

<?php
    
////////////Category_filter////////////
    if(isset( $_GET['cat_id'] ) ){
        category_filter($pdo);
    }








///////////////////LIST OF METHODS////////////
///////////Categories Filters//////////
function category_filter($pdo){

        $cat_id=trim($_GET['cat_id']);
        $clean = htmlspecialchars($cat_id);

        if($clean==0){
            $get_beats="select products.*, category.category_name, producers.full_name, images.img_name, images.type from products inner join images on images.product_id=products.product_id
            inner join producers on producers.producer_id= products.producer_id 
            inner join category on products.category_id=category.category_id";
        }

        else{
            $get_beats = "select products.*, category.category_name, producers.full_name, images.img_name, images.type from products inner join images on images.product_id=products.product_id
            inner join producers on producers.producer_id= products.producer_id 
            inner join category on products.category_id=category.category_id where products.category_id=$clean";
        }

     
            $row = $pdo->query($get_beats);
         
            foreach($row as $item){
                $name=$item['name']; $pro_name=$item['full_name'];   $img=$item['img_name']; 
                $type=$item['type']; $sold=$item['sold']; $id=$item['product_id']; $category=$item['category_name'];
                   if($sold==false){ include('views/beats.php'); }
                }
            
        

}















?>