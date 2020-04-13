<?php



?>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <form action="<?php echo URL_BASE . "usuario/admin" ?>" method="POST">
        <h2>Insertar Noticias</h2>
            <div class="form-group">
                <label for="exampleInputTitulo">Escribe un titulo</label>
                <input name="titulo" type="varchar" class="form-control" id="exampleInputTitulo" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleFormControlDescripcion">Escribe la descripcion</label>
                <textarea name="descripcion" class="form-control" id="exampleFormControlDescripcion" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputIdCat">Escribe la id_cat</label>
                <input name="id_cat" type="int" class="form-control" id="exampleInputIdCat">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>    
    </div>
</div>
