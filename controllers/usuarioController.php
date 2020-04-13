<?php

require_once "controllers/baseController.php";
require_once "data/usuario/usuarioData.php";
require_once "data/noticias/noticiasData.php";
require_once "config/config.php";

class usuarioController extends baseController{

    #region login
    public function login(){

        $user = new usuarioData();

        $email = "";
        $password = "";

        if(isset($_POST["email"]) && isset($_POST["passwrd"])){
            $email = $_POST["email"];
            $password = $_POST["passwrd"];
        }

        $userData = $user->login($email, $password);

        if($userData){
            $_SESSION["userData"] = $userData;
            if(isset($_SESSION["controller"]) && isset($_SESSION["action"])){
                $url = URL_BASE . $_SESSION["home"] . "/" . $_SESSION["index"];
                header("Location: $url");
                ob_end_flush();
            }

        }else{

            require_once "views/usuario/login.php";
        }

    }
    #endregion

    #region logout
    public function logout(){

        $referer = URL_BASE;

        if(isset($_SERVER["HTTP_REFERER"])){
            $referer = $_SERVER["HTTP_REFERER"];
        }

        if(isset($_SESSION["userData"])){
            unset($_SESSION["userData"]);
            header("Location:" . $referer);
            ob_end_flush();
        }

    }
    #endregion

    #region admin
    public function admin(){

        $insert = new noticiasData();
        
        $titulo = "";
        $descripcion = "";
        $id_cat = "";
        
        if(isset($_POST["titulo"]) && isset($_POST["descripcion"]) && isset($_POST["id_cat"])){
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $id_cat = $_POST["id_cat"];

        $noticiaData = $insert->insertarNoticias($titulo, $descripcion, $id_cat);

        }



        require_once "views/usuario/admin_noticias.php";
    }
    #endregion

    #region registro
    public function registro(){

        $insertarUsuario = new usuarioData();

        $nombre = "";
        $apellidos = "";
        $email = "";
        $passwrd = "";
        $direccion = "";
        $telefono = "";

        if(isset($_POST["nombre"]) && isset($_POST["apellidos"]) && isset($_POST["email"]) && isset($_POST["passwrd"]) && isset($_POST["direccion"]) && isset($_POST["telefono"])){
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $email = $_POST["email"];
            $passwrd = $_POST["passwrd"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];

            $usuarioData = $insertarUsuario->insertarUsuario($nombre, $apellidos, $email, $passwrd, $direccion, $telefono);
        }

        require_once "views/usuario/registro.php";

    }
    #endregion

}

?>