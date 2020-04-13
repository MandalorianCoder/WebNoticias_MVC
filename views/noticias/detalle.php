<?php 

/* session_start(); */

?>

<div class="container-fluid">
    <div class="row">
        <?php
        $val = $getDataDetalle;
        require_once "views/noticias/fichaNoticia.php";
        ?>
            <form action="<?php echo URL_BASE . "comentarios/enviarComentario" ?>" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Añadir comentario</label>
                    <textarea name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    <input name="idnoticia" type="hidden" value="<?php echo $val->id ?>">
                    <br>
                    <?php if(isset($_SESSION["userData"])): ?>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <?php else : ?>
                    <a class="btn btn-primary" href="<?php echo URL_BASE . "usuario/login" ?>">Inicia sesión para publicar comentario</a>
                    <?php endif; ?>
                </div>
            </form>
    </div>
</div>