<div class="container-fluid">
    <div class="row">
        <div class="col-lg col-sm col-md">
            <h2><?php print_r($getData[0]->cat_name); ?></h2>
        </div>
        <div class="row">
            <?php foreach ($getData as $val) : ?>
                <?php if($val->id_cat == 1): ?>
                <?php require "views/noticias/fichaNoticia.php";?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-sm col-md-2">
            <h2><?php print_r($getData[8]->cat_name); ?></h2>
        </div>
        <div class="row">
            <?php foreach ($getData as $val) : ?>
                <?php if($val->id_cat == 2): ?>
                <?php require "views/noticias/fichaNoticia.php";?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>