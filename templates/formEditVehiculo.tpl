{include file="header.tpl"}
    
{if $userLogged}
<h2 class="text-center">Actualizar datos de {$vehiculo->marca} {$vehiculo->modelo} patente {$vehiculo->patente}</h2>
<div class="row d-flex justify-content-center bg-light text-success">
    <form action="editarVehiculo" method="POST" class="my-4 fw-bold text-center" style="width: 18rem;">
        <div class="hidden">
            <input type="text" name="id" id="disabledTextInput" class="form-control" value="{$vehiculo->id}" hidden />
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" name="marca" id="disabledTextInput" class="form-control" value="{$vehiculo->marca}" required />
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" name="modelo" id="disabledTextInput" class="form-control" value="{$vehiculo->modelo}" required />
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="number" name="anio" id="disabledTextInput" class="form-control" value="{$vehiculo->anio}" required />
        </div>
        <div class="mb-3">
            <label for="patente" class="form-label">Patente</label>
            <input type="text" name="patente" id="disabledTextInput" class="form-control" value="{$vehiculo->patente}" required />
        </div>
        <div class="mb-3">
            <label for="asientos" class="form-label">Asientos</label>
            <input type="number" name="asientos" id="disabledTextInput" class="form-control" value="{$vehiculo->asientos}" required />
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-outline-danger">Actualizar</button>
        </div>
    </form>
</div>
{else}
    <h4 class="alert alert-info">No tienes permiso para acceder a esta página.</h4>
{/if}

{include file="footer.tpl"}