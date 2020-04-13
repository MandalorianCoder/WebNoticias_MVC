<?php

require_once "controllers/baseController.php";

class Datos extends baseController{

    #region executeQuery
    public function executeQuery($query){
        
        $result = null;
        $cnn = $this->connection();
        $result = $cnn->query($query);
        
        if (count($cnn->errorInfo()) > 0){
            foreach ($cnn->errorInfo() as $val){
                echo $val."</br>";
            }
        }

        return $result;

    }
    #endregion

    #region InsertarMenu
    public function InsertarMenu($idMenu, $href, $menuName){
        
        $string = "INSERT INTO menu (id_menu, href, menu_name) VALUES ({$idMenu}, '{$href}', '{$menuName}');";
        return $string;
    }
    #endregion

    #region cargarDatosMenu
    public function cargarDatosMenu(){
        
        $string = $this->InsertarMenu(1, 'home/index', 'Home');
        $this->executeQuery($string);

        $string = $this->InsertarMenu(1, 'noticias/index&id=2', 'Noticias');
        $this->executeQuery($string);

        $string = $this->InsertarMenu(1, 'contacto/index', 'Contacto');
        $this->executeQuery($string);
    }
    #endregion


}

?>