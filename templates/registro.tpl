{include file="header.tpl"}
<div class="container mt-5">
    <h2>Registro</h2>
    <form action="insertUser" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Usuario</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Registrarse">
    </form>
    <h4 class=" ">{$error}</h4>
</div>
{include file="footer.tpl"}