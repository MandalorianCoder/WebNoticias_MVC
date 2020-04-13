<?php

require_once "controllers/baseController.php";
require_once "data/datos/datos.php";
require_once "data/noticias/noticiasData.php";

class noticiaController extends baseController{

    #region getNoticias
    public function getNoticias(){
        $getNoticiasData = new noticiasData();
        $getData = $getNoticiasData->getNoticiasData();
        require_once "views/noticias/getNoticias.php";
        /* print_r($getData); */

    }
    #endregion

    #region getAllNoticias
    public function getAllNoticias(){
        $getAllNoticias = new noticiasData();
        $getData = $getAllNoticias->getNoticiasData();
        require_once "views/noticias/getAllNoticias.php";
    }
    #endregion

    #region detalle
    public function detalle(){
        $idNoticia = 0;
        if(isset($_GET["idnoticia"])){
            $idNoticia = $_GET["idnoticia"];
        }

        $getDetalle = new noticiasData();
        $getDataDetalle = $getDetalle->getDetalleData($idNoticia);
        require_once "views/noticias/detalle.php";
    }
    #endregion

}

?>