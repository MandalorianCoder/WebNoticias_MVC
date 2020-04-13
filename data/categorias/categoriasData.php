<?php

require_once "controllers/baseController.php";
require_once "models/categorias/categoriasModel.php";

class categoriasData extends baseController{

    #region getCategorias
    public function getCategorias(){
        
        $array = [];
        $conexion = $this->connection();

        $query = <<<EOD
                SELECT * FROM categorias;
                EOD;
        
        $result = $conexion->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);

        if(count($rows) > 0){
            foreach($rows as $val){
                $categorias = new categoriasModel();
                $categorias->id = $val["id"];
                $categorias->cat_name = $val["cat_name"];

                $array[] = $categorias;
            }
        }
        
        $result = null;
        $conexion = null;
        return $array;

    }
    #endregion
}

?>