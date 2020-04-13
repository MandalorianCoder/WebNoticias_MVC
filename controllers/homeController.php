<?php

    require_once "controllers/baseController.php";
    require_once "controllers/noticiaController.php";

    class homeController extends baseController{

        public function index(){
            
            $producto = new noticiaController();
            $producto->getNoticias();
            
            /* if(isset($_SESSION["userData"])){
                print_r($_SESSION["userData"]);
            } */
            

            require_once "index.php";
        }

    }

?>