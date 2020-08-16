<?php

class Init{

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