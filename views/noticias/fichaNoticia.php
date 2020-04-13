<?php

require_once "config/config.php";

?>

<!-- <?php print_r($val->arrayComentarios); ?> -->
<div class="col-lg-4 col-sm col-md-6">
  <div class="card" style="width: 18rem;">
    <?php if (isset($_SESSION["userData"])) :
      $userInfo = $_SESSION["userData"];
    ?>
      <a href="<?php echo URL_BASE . "noticia/detalle&idnoticia=" . $val->id . "&idusuario=" . $userInfo->id ?>"><img src="<?php echo URL_BASE . $val->src ?>" class="card-img-top" alt="img_noticia"></a>
    <?php else : ?>
      <a href="<?php echo URL_BASE . "noticia/detalle&idnoticia=" . $val->id ?>"><img src="<?php echo URL_BASE . $val->src ?>" class="card-img-top" alt="img_noticia"></a>
    <?php endif; ?>
    <div class="card-body">
      <?php if (isset($_SESSION["userData"])) :
        $userInfo = $_SESSION["userData"];
      ?>
        <a href="<?php echo URL_BASE . "noticia/detalle&idnoticia=" . $val->id . "&idusuario=" . $userInfo->id ?>"><h5 class="card-title"><?php echo $val->titulo ?></h5></a>
      <?php else : ?>
        <a href="<?php echo URL_BASE . "noticia/detalle&idnoticia=" . $val->id ?>"><h5 class="card-title"><?php echo $val->titulo ?></h5></a>
      <?php endif; ?>
      <p class="card-text"><?php echo $val->descripcion ?></p>
      <p class="card-text">Visitada: <?php echo $val->id_numvis ?> veces</p>
      <p class="card-text">Valoracion: <?php echo $val->valoracion ?>/5</p>
      <?php if (isset($_GET["idnoticia"])) : ?>
        <p class="card-text">Comentarios: </p>
        <?php foreach ($val->arrayComentarios as $item) : ?>
          <p><?php echo $item->nombreUsuario . ": " . $item->comentario ?></p>
        <?php endforeach; ?>
      <?php endif; ?>
      <?php if (isset($_SESSION["userData"])) :
        $userInfo = $_SESSION["userData"];
      ?>
        <a href="<?php echo URL_BASE . "noticia/detalle&idnoticia=" . $val->id . "&idusuario=" . $userInfo->id ?>" class="btn btn-primary">Leer más</a>
      <?php else : ?>
        <a href="<?php echo URL_BASE . "noticia/detalle&idnoticia=" . $val->id ?>" class="btn btn-primary">Leer más</a>
      <?php endif; ?>
    </div>
  </div>
</div>