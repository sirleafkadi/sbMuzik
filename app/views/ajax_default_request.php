<?php 
require('../protected/ajax_db.php'); 
 
$db=new Ajax_db(); $pdo=$db->get_ajax__pdo();?>

<?php
    
////////////Calling Methods////////////
  








///////////////////LIST OF METHODS////////////
///////////Categories Filters//////////
function pages_filter($pdo){

    $total=0;
    $result_per_page =4;
    $number_f_pages = ceil($total/$result_per_page);
  
    
  if( !isset($_GET['page']) ){
    
      $page=1;
    
    }
  
      else{ $page=$_GET['page'];  }
    
      $this_page_first=($page-1)*$result_per_page;
  
  
    $sql=" select beats.*, category.category_name from beats inner join category on beats.category_id = category.category_id limit ".$this_page_first. ','. $result_per_page;
    $row=$pdo->query($sql);
    
  for( $page=1; $page<=$number_f_pages; $page++){
    
        echo '<option class="option" value="'.$page.'"> <span><span>Page</span>'.$page.'</option>';

  }


  
}













?>