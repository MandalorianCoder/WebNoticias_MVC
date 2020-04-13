<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <form action="<?php echo URL_BASE . "usuario/login" ?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Introduce email</label>
                <input name="email" required="required" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input name="passwrd" required="required" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-success">Acceder</button>
            <!-- <?php if($loginError): ?>
            <small><?php echo "Login Error Ompare!"; ?></small>
            <?php endif; ?> -->
            <div>
                <small id="emailHelp" class="form-text text-muted">Si todavía no estás registrado en la web:</small>
                <a class="btn btn-primary" href="<?php echo URL_BASE . "usuario/registro" ?>">Regístrate</a>
            </div>
        </form>
    </div>
</div>