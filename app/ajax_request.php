<?php require('../protected/ajax_db.php'); 

$db=new Ajax_db(); $pdo=$db->get_ajax__pdo();?>

<?php
    
////////////Category_filter////////////
    if(isset( $_GET['cat_id'] ) ){
        category_filter($pdo);
    }








///////////////////LIST OF METHODS////////////

function category_filter($pdo){

        $cat_id=trim($_GET['cat_id']);
        $clean = htmlspecialchars($cat_id);

         $row = $pdo->query("select * from products where category_id=$clean")->fetch(PDO::FETCH_ASSOC);
         
         foreach($row as $item){
             $ajax[] = $item;
             }
            echo json_encode($ajax);
        

}















?>