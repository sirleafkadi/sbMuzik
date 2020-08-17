<?php

class Init{

    private $get_beats_query;




    function __construct()
    {
        //////////////Get beats
        $this->get_beats_query="select products.*, category.category_name, producers.full_name, images.img_name, images.type from products inner join images on images.product_id=products.product_id
        inner join producers on producers.producer_id= products.producer_id 
        inner join category on products.category_id=category.category_id;";
    }

////////Get Beats/////
    public function get_beats(){
            return $this->get_beats_query;
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