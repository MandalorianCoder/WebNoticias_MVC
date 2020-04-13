<?php


?>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <form action="<?php echo URL_BASE . "usuario/registro" ?>" method="POST">
            <div class="form-group">
                <label for="exampleInputNombre">Nombre</label>
                <input name="nombre" type="varchar" class="form-control" id="exampleInputNombre" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputApellidos">Apellidos</label>
                <input name="apellidos" type="varchar" class="form-control" id="exampleInputApellidos" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input name="passwrd" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputDireccion">Direccion</label>
                <input name="direccion" type="varchar" class="form-control" id="exampleInputDireccion">
            </div>
            <div class="form-group">
                <label for="exampleInputTelefono">Telefono</label>
                <input name="telefono" type="int" class="form-control" id="exampleInputTelefono">
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
</div>