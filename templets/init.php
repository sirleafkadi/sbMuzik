<?php

class Init{

    /////Starting Sessions & Output Buffer
        public function start(){
            session_name('username');
            session_start();
            ob_start();
        }


        private function  redirect($url){

            
        }
    
}///END OF CLASS




?>