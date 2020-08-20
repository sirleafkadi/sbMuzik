<?php

class Init {

    private $beats_query;
    private $category_query;
    private $pdo;
    private $total_query;

    function __construct()
    {
        $cat_id="";
        //////////////Creating objects
        $this->beats_query="select products.*, category.category_name, producers.full_name, images.img_name, images.type from products inner join images on images.product_id=products.product_id
        inner join producers on producers.producer_id= products.producer_id 
        inner join category on products.category_id=category.category_id;";

        $this->category_query="select * from category";
        $this->total_query="select name from products";
        
    }

////////Get Beats/////
    public function get_beats(){
            return $this->beats_query;
    }

///////Get categories/////
function get_cat_init(){

    return $this->category_query;
}

///////Get categories/////
function get_total(){

    return $this->total_query;
}





    /////Starting Sessions & Output Buffer
        public function start(){
            session_name('username');
            session_start();
            ob_start();
            $_SESSION['db_msg']="";
        }

        public function get_pdo(){

            return $this->pdo;
        }
        private function  redirect($url){

            
        }
    
}///END OF CLASS




?>