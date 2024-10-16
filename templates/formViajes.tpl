{include file="header.tpl"}
    
{if $userLogged}
<h2 class="text-center">Agregar nuevo viaje</h2>
<div class="row d-flex justify-content-center bg-light text-success">

    <form action="agregarviaje" method="POST" class="my-4 fw-bold" style="width: 18rem;">
        <div class="mb-3">
            <label for="destino" class="form-label">Destino</label>
            <select name="destino" id="disabledSelect" class="form-select" required>
                <option value="Cafayate">Cafayate</option>
                <option value="Cataratas de Iguazú">Cataratas de Iguazú</option>
                <option value="Córdoba">Córdoba</option>
                <option value="El Bolsón">El Bolsón</option>
                <option value="El Chaltén">El Chaltén</option>
                <option value="Esteros de Iberá">Esteros de Iberá</option>
                <option value="Glaciar Perito Moreno">Glaciar Perito Moreno</option>
                <option value="La Boca">La Boca</option>
                <option value="La Plata">La Plata</option>
                <option value="Las Salinas">Las Salinas</option>
                <option value="Mar del Plata">Mar del Plata</option>
                <option value="Mendoza">Mendoza</option>
                <option value="Parque Nacional Lanin">Parque Nacional Lanin</option>
                <option value="Puerto Madryn">Puerto Madryn</option>
                <option value="Rosario">Rosario</option>
                <option value="Ruinas de San Ignacio">Ruinas de San Ignacio</option>
                <option value="Sierra de la Ventana">Sierra de la Ventana</option>
                <option value="Tandil">Tandil</option>
                <option value="Teatro Colón">Teatro Colón</option>
                <option value="Tigre">Tigre</option>
                <option value="Tilcara">Tilcara</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="vehiculo" class="form-label">Vehículo</label>
            <select name="vehiculo" id="disabledSelect" class="form-select" required>
            {foreach $vehiculos as $vehiculo}
                <option value="{$vehiculo->id}">{$vehiculo->marca} {$vehiculo->modelo} - {$vehiculo->asientos} lugares</option>
            {/foreach}
            </select>
        </div>
        <div class="mb-3">
            <label for="dia" class="form-label">Día</label>
            <input type="date" name="fecha" id="disabledTextInput" class="form-control" value=""
                required />
        </div>
        <div class="mb-3">
            <label for="horario" class="form-label">Horario de salida</label>
            <input type="time" name="horario" id="disabledTextInput" class="form-control" value="" required />
            </div>
        <div class= "mb-3">
            <label for="lugares" class="form-label">Asientos</label>
            <input type="number" name="lugares" class="form-control" value=""
                />
        </div>
        <div class="mb-3">
            <label for="datos" class="form-label">Info extra</label>
            <textarea type="text" name="datos" id="disabledTextInput" class="form-control" value=""></textarea>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-outline-danger">Agregar viaje</button>
        </div>
    </form>
</div>
{else}
    <p>No tienes permiso para acceder a esta página.</p>
{/if}
{include file="footer.tpl"}