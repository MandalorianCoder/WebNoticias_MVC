<?php

require_once "config/config.php";

if (isset($_SERVER["QUERY_STRING"])) {
    parse_str($_SERVER["QUERY_STRING"], $query_array);
    // print_r($query_array);
    $controller = "home";
    if (array_key_exists("controller", $query_array)) {
        $controller = $query_array["controller"];
    }
    $action = "index";
    if (array_key_exists("action", $query_array)) {
        $action = $query_array["action"];
    }
    if (!(($controller == "usuario") && ($action == "login"))) {
        $_SESSION["controller"] = $controller;
        $_SESSION["action"] = $action;
    }
}

ob_start();

?>

<div class="row">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo URL_BASE . "home/index" ?>"><img id="logo" width="200" height="100" src="<?php echo URL_BASE . 'img/logo.png'; ?>" alt="Logo_Web"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URL_BASE . "home/index" ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URL_BASE . "noticia/getAllNoticias" ?>">Noticias</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorías
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Mostrar todas las noticas</a>
                        </div>
                    </li>
                    <li class="nav-item end-menu btn-group dropdown">
                        <?php if (!isset($_SESSION["userData"])) : ?>
                            <a class="btn btn-success" href="<?php echo URL_BASE . "usuario/login" ?>">Login</a>
                        <?php else : ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                $userInfo = $_SESSION["userData"];
                                echo $userInfo->nombre;
                                ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="<?php echo URL_BASE . "usuario/admin" ?>">Admin</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo URL_BASE . "usuario/logout" ?>">Log-out</a>
                            </div>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </div>
</div>