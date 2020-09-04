<?php 
 session_start();
require('../protected/ajax_db.php'); 
?>

<?php
$db=new Ajax_db(); $pdo=$db->get_ajax__pdo();  
////////////Calling Methods////////////

if( isset($_GET['offset'])  ){get_beats($pdo);}


///////////////////LIST OF METHODS////////////

///////////Get Beats//////////
function get_beats($pdo){
       
           
            $offset=$_GET['offset']; 
            $max=$_GET['max'];
            
        if(  isset($_GET['cat_id'])  ){
            $id=$_GET['cat_id'];
            //////choosing sql query/////
           $sql= "call sbmuzik_db.get_filter_beats($id, $offset, $max);";
           $sql_count= "call sbMuzik_db.count_category($id);";
        }

        else{
           $sql="call sbmuzik_db.get_beats( $offset, $max);";
           $sql_count= "call sbMuzik_db.count_all();";
         }
         
         $total = $pdo->query($sql_count)->fetchColumn();
        $row = $pdo->query($sql);
        while($item=$row->fetch( PDO::FETCH_ASSOC )){
            // $name=$item['name']; $pro_name=$item['full_name'];   $img=$item['img_name']; 
            // $type=$item['type']; $sold=$item['sold']; $id=$item['product_id']; $category=$item['category_name'];
            // include('views/beats.php'); 

            $ray[]=$item;
          }
        $ray[]=$total;
          echo json_encode($ray);
}





















///////////Page Filters//////////
function page_filter($pdo){
    if(isset($_GET['num_rows']) ){   $total_rows =trim($_GET['num_rows']);  $total_rows = htmlspecialchars($total_rows );    }
    $page=0;
    if( isset($_GET['page']) ){  $clean_page=trim($_GET['page']); $page=$cur_page = htmlspecialchars($clean_page);}
    else{$page=1;}

    $rows_per_page=2;
    $total_rows;
    
    $offset=($page-1)*$rows_per_page;
    
    $sql="select products.*, category.category_name, producers.full_name, images.img_name, images.type from products inner join images on images.product_id=products.product_id
    inner join producers on producers.producer_id= products.producer_id 
    inner join category on products.category_id=category.category_id  limit ".$offset. ','. $rows_per_page;

    $row=$pdo->query($sql);

    foreach($row as $item){
        $name=$item['name']; $pro_name=$item['full_name'];   $img=$item['img_name']; 
        $type=$item['type']; $sold=$item['sold']; $id=$item['product_id']; $category=$item['category_name'];
        if($sold==false){ include('views/beats.php'); }

    }



        
}












?>