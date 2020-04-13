<?php

require_once "config/config.php";

?>

<div class="row">
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="col-lg col-sm col-md-3">
                <div class="collapse navbar-collapse d-flex justify-content-start" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL_BASE . "home/index" ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL_BASE . "noticia/getAllNoticias" ?>">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
