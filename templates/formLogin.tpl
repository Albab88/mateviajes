{include file="header.tpl"}
    
<h2 class="text-center">LogIn</h2>
<div class="row d-flex justify-content-center bg-light text-success">
    <form action="autenticar" method="POST" class="my-4 fw-bold" style="width: 18rem;">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" name="usuario" id="user" class="form-control" value="" required />
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" id="pw" class="form-control" value="" required />
        </div>
        {if $error}
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-outline-danger">LogIn</button>
        </div>
    </form>
</div>

{include file="footer.tpl"}