<?php

class Init{

    private $beats_query;
    private $category_query;



    function __construct()
    {
        //////////////Creating objects
        $this->beats_query="select products.*, category.category_name, producers.full_name, images.img_name, images.type from products inner join images on images.product_id=products.product_id
        inner join producers on producers.producer_id= products.producer_id 
        inner join category on products.category_id=category.category_id;";

        $this->category_query="select * from category";
    }

////////Get Beats/////
    public function get_beats(){
            return $this->beats_query;
    }

///////Get categories/////
function get_cat_init(){

    return $this->category_query;
}



    /////Starting Sessions & Output Buffer
        public function start(){
            session_name('username');
            session_start();
            ob_start();
            $_SESSION['db_msg']="";
        }


        private function  redirect($url){

            
        }
    
}///END OF CLASS




?>