<?php 

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
  
  echo '<span style="background-color: red" ><a href="index.php?page='.$page.' ">'.$page.'</a> </span>';

}


?>