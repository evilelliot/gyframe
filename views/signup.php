<div class="container" style="margin-top: 100px;">
    <form class="login-form" action="auth_login" method="post">
        <div class="form-group">
            <h4>Registrate</h4>
        </div>
        <div class="form-group">
            <label for="firstname">Nombre</label>
            <input type="text" class="form-control" id="firstname" aria-describedby="firstname" placeholder="Tu primer nombre.">
        </div>
        <div class="form-group">
            <label for="lasstname">Apellido(s)</label>
            <input type="text" class="form-control" id="lastname" aria-describedby="firstname" placeholder="Tu(s) apellidos.">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tu email.">
            <small id="emailHelp" class="form-text text-muted">Tu email no será compartido con terceros.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
        <hr>
        <a href="login">¿Ya tienes cuenta? Inicia sesión acá.</a>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>