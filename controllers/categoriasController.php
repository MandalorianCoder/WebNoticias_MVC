<?php

require_once "controllers/baseController.php";
require_once "data/categorias/categoriasData.php";

class categoriasController extends baseController{

    #region categorias
    public function categorias(){
        
        $getCategorias = new categoriasData();
        $getData_cat = $getCategorias->getCategorias();

        require_once "views/layout/header.php";
        print_r($getData_cat);
    }
    #endregion

}

?>