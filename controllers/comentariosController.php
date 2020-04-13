<?php

require_once "controllers/baseController.php";
require_once "data/comentarios/comentariosData.php";
require_once "config/config.php";

class comentariosController extends baseController{
    
    #region enviarComentario
    public function enviarComentario(){
        if(isset($_SESSION["userData"])){

            $insertarComentario = new comentariosData();
            $id_usuario = $_SESSION["userData"]->id;
            $id_noticia = "";
            $comentario = "";

            if(isset($_POST["comentario"]) && isset($_POST["idnoticia"])){
                $id_noticia = $_POST["idnoticia"];
                $comentario = $_POST["comentario"];

                $comentarioData = $insertarComentario->insertarComentario($id_usuario, $id_noticia, $comentario);
                print_r($comentarioData);
            }

            header("Location: " . URL_BASE . "noticia/detalle&idnoticia=" . $id_noticia . "&idusuario=" . $id_usuario);

            /* $redirigeNoticiasDetalle = new noticiaController();
            $redirigeNoticiasDetalle->detalle(); */

        }
        
      //  require_once "views/noticias/detalle.php";
    }
    #endregion
}
