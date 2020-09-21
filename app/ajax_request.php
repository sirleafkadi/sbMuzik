<?php 
 session_start();
require('../protected/ajax_db.php'); 
?>

<?php
$db=new Ajax_db(); $pdo=$db->get_ajax__pdo();  
////////////Calling Methods////////////

if( isset($_GET['offset'])  ){get_beats($pdo);}
if( isset($_GET['char'])  ){ live_search($pdo, $_GET['char']); }


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

      if( isset($_GET['sorting']) ) { 
            $sql="call sbmuzik_db.get_beats( $offset, $max, true, false, true)";
          }
      else{ $sql="call sbmuzik_db.get_beats( $offset, $max, true, false, false)";}
           $sql_count= "call sbMuzik_db.count_all(true, false)";
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


///////////live_search
function live_search($pdo, $search){
  // $search= trim($char);
  // $search=htmlspecialchars($search);

  $row=$pdo->query("select category_name from category where category_name like '%".$search."%' union select full_name from producers where full_name like '%".$search."%' union select name from products where name like '%".$search."%' ");

  foreach($row as $item){

    if(  isset( $item['category_name']  )  ){echo' <p class="search_results"> <a style="color:white" class="all" href="?get">'.$item['category_name'].'</a></p>';}
   

  }

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