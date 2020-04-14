<?php

require_once "controllers/baseController.php";
require_once "controllers/categoriasController.php";
require_once "data/datos/datos.php";

class menuController extends baseController{

#region header
public function Header(){

   /*   $id = 1;
    $controllerDefine = isset($_GET["id"]);
    if($controllerDefine && !empty($_GET["id"])){
        $id = $_GET["id"];
    }
    $result = $this->getMenu($id); */ 

    /* $categoria = new categoriasController();
    $arrayCat = $categoria->categorias(); */
    
    /* if($id == 3){
    $nombreCat = $categoria->categoriasName();
    }  */
    



    require_once "views/layout/header.php";        
}
#endregion

#region cargarMenu
public function cargarDatosMenu(){
    $datos = new Datos();
    $datos->cargarDatosMenu();
}
#endregion
    
}

?>