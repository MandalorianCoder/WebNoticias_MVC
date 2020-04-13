<?php

require_once "controllers/baseController.php";
require_once "models/usuario/usuarioModel.php";

class usuarioData extends baseController{

    #region login
    public function login($email, $passwrd){
    
        $usuario = false;

        $conexion = $this->connection();

        $query = <<<EOD
                SELECT * FROM usuarios
                WHERE usuarios.email = '$email' AND usuarios.passwrd = '$passwrd';
                EOD;

        $result = $conexion->query($query);

        if($result){
            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
            if(count($rows) > 0){
                $val = $rows[0];
                $usuario = new usuarioModel();

                $usuario->id = $val["id"];
                $usuario->nombre = $val["nombre"];
                $usuario->apellidos = $val["apellidos"];
                $usuario->email = $val["email"];
                $usuario->passwrd = $val["passwrd"];
                $usuario->direccion = $val["direccion"];
                $usuario->telefono = $val["telefono"];
                $usuario->fecha_alta = $val["fecha_alta"];
            }
        }
        $result = null;
        $conexion = null;
        return $usuario;
    }
    #endregion

    #region insertarUsuario
    public function insertarUsuario($nombre, $apellidos, $email, $passwrd, $direccion, $telefono){
        
        $conexion = $this->connection();

        $query = <<<EOD
                INSERT INTO usuarios (nombre, apellidos, email, passwrd, direccion, telefono, fecha_alta) VALUES ('{$nombre}', '{$apellidos}', '{$email}', '{$passwrd}', '{$direccion}', '{$telefono}', NOW());
                EOD;

        $result = $conexion->query($query);

        $result = null;
        $conexion = null;

    }
    #endregion


}

?>