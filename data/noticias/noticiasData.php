<?php

require_once "controllers/baseController.php";
require_once "models/noticias/noticiasModel.php";
require_once "models/comentarios/comentariosModel.php";

class noticiasData extends baseController{

    #region getNoticiasData
    public function getNoticiasData(){
        
        $array = [];
        $conexion =  $this->connection();

        $query = <<<EOD
            SELECT noticias.id, titulo, descripcion, id_numvis, valoracion, src, categorias.id as id_cat, cat_name FROM noticias
            JOIN imagenes ON noticias.id = imagenes.id_noticias
            JOIN categorias ON noticias.id_cat = categorias.id
            ORDER BY noticias.id_numvis DESC;
        EOD;
        
        $result = $conexion->query($query);
        
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);

        if(count($rows) > 0){
            foreach($rows as $val){
                $noticias = new noticiasModel();
                $noticias->id = $val["id"];
                $noticias->titulo = $val["titulo"];
                $noticias->descripcion = $val["descripcion"];
                $noticias->id_cat = $val["id_cat"];
                $noticias->id_numvis = $val["id_numvis"];
                $noticias->valoracion = $val["valoracion"];
                $noticias->src = $val["src"];
                $noticias->cat_name = $val["cat_name"];

                $array[] = $noticias;
            }
        }


        $result = null;
        $conexion = null;
        return $array;

    }
    #endregion

    #region insertarNoticias
    public function insertarNoticias($titulo, $descripcion, $id_cat){
    
        $conexion = $this->connection();

        $query = <<<EOD
                INSERT INTO noticias (titulo, descripcion, id_cat, id_numvis, valoracion) VALUES ('{$titulo}', '{$descripcion}', '{$id_cat}', 0, 0);
                EOD;

        $result = $conexion->query($query);

        $result = null;
        $conexion = null;

    }
    #endregion

    #region getDetalleData
    public function getDetalleData($idNoticia){
        
        $noticias = new noticiasModel();
        $conexion = $this->connection();
        $query = <<<EOD
                SELECT noticias.id, titulo, descripcion, id_numvis, valoracion, src, imagenes.id_noticias, comentario, nombre FROM noticias
                JOIN imagenes ON noticias.id = imagenes.id_noticias
                LEFT JOIN comentarios ON noticias.id = comentarios.id_noticia
                LEFT JOIN usuarios ON comentarios.id_usuario = usuarios.id
                WHERE noticias.id = $idNoticia;
                EOD;

        $result = $conexion->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $row2s = $rows;

        if(count($rows) > 0){
            $val = $rows[0];
            $noticias->id = $val["id"];
            $noticias->titulo = $val["titulo"];
            $noticias->descripcion = $val["descripcion"];
            $noticias->id_numvis = $val["id_numvis"];
            $noticias->valoracion = $val["valoracion"];
            $noticias->src = $val["src"];
            foreach($row2s as $item){
                $comentarios = new comentariosModel();
                if(isset($item["comentario"])){
                    $comentarios->comentario = $item["comentario"];
                    $comentarios->nombreUsuario = $item["nombre"];                
                    $noticias->arrayComentarios[] = $comentarios;
                }
            }
        }

        $query2 = <<<EOD
                UPDATE noticias SET id_numvis = id_numvis + 1
                WHERE noticias.id = $idNoticia;
                EOD;

        $result2 = $conexion->query($query2);

        $result = null;
        $result2 = null;
        $conexion = null;
        return $noticias;
    }
    #endregion
}

?>