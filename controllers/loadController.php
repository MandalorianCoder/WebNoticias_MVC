<?php

require_once "autoload.php";

$showError = true; //Por defecto, vamos a decir que $showError es true.
$controllerName = "homeController"; //Por defecto, esta variable tendrá el valor indicado.
$actionName = "index"; //Por defecto, la acción será index.
$CONTROLLER = "controller"; //Lo ponemos en mayúscula para saber que es una constante, no una variable cualquiera.
$ACTION = "action"; //Lo ponemos en mayúscula para saber que es una constante, no una variable cualquiera.

$controllerDefine = isset($_GET[$CONTROLLER]); //Comprobamos si existe el controlador.
if($controllerDefine) $controllerName = $_GET[$CONTROLLER].'Controller'; //Si existe el controlador en la url, le concatenamos 'controller', para establecer la clase ya definida.

$actionDefine = isset($_GET[$ACTION]); //Comprobamos si existe la acción.
if($actionDefine) $actionName = $_GET[$ACTION]; //Si existe, asignamos la acción recogida en la url a la variable $actionName.

if(class_exists($controllerName)){ //Comprobamos si existe la clase del controlador.
    $controllerInstancia = new $controllerName(); //Hacemos la instancia al controlador.
    
    $exists = method_exists($controllerInstancia, $actionName); //Comprobamos is existe el método correspondiente al controlador.
    $showError = !$exists; //Así el $showError sería false, y no entraría en el if de abajo del todo.

    /* echo $controllerName . "". $actionName; */
    /* exit; */
    if($exists) $controllerInstancia->$actionName(); //Si existe el método, realiza la acción correspondiente.
}

if($showError){ //Comprobamos si $showError es true.
    $error = new errorController(); //Si es true, creamos la instancia a la clase del controlador del error.
    $error->errorAction(); //Realizamos la acción asociada a ese controlador.
}
    

?>