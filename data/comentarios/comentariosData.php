<?php

require_once "controllers/baseController.php";

class comentariosData extends baseController{
    
    #region insertarComentario
    public function insertarComentario($id_usuario, $id_noticia, $comentario){
        $conexion = $this->connection();
        $query = <<<EOD
                INSERT INTO comentarios (id_usuario, id_noticia, comentario, fecha_comentario) VALUES ({$id_usuario}, {$id_noticia}, '{$comentario}', NOW());
                EOD;

        $result = $conexion->query($query);

        $result = null;
        $conexion = null;
    }
    #endregion
}

?>