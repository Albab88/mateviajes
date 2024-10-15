{include file="header.tpl"}
    
{if $userLogged}
<h2 class="text-center">Agregar nuevo vehículo</h2>
<div class="row d-flex justify-content-center bg-light text-success">

    <form action="agregarvehiculo" method="POST" class="my-4 fw-bold" style="width: 18rem;">
        
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" name="marca" id="disabledTextInput" class="form-control" value=""
                mrequired />
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" name="modelo" id="disabledTextInput" class="form-control" value="" required />
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="number" name="anio" id="disabledTextInput" class="form-control" value="" required />
        </div>
        <div class="mb-3">
            <label for="patente" class="form-label">Patente</label>
            <input type="text" name="patente" id="disabledTextInput" class="form-control" value="" required />
        </div>
        <div class="mb-3">
            <label for="asientos" class="form-label">Asientos</label>
            <input type="number" name="asientos" id="disabledTextInput" class="form-control" value="" required />
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-outline-danger">Agregar vehículo</button>
        </div>
    </form>
</div>
{else}
    <p>No tienes permiso para acceder a esta página.</p>
{/if}
{include file="footer.tpl"}