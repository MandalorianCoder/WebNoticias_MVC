<?php

require_once "config/config.php";

?>

<?php foreach ($getData_cat as $val) : ?>
    <div class="container-fluid">
        <br>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-sm col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-body d-flex justify-content-center">
                        <a href="<?php echo URL_BASE . "noticia/getAllNoticias" ?>"><h5 class="card-title"><?php echo $val->cat_name ?></h5></a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
<?php endforeach; ?>