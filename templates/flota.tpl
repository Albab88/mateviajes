{include file="header.tpl"}

    <section>
        <table class="table table-striped">
            <tr>
                <th class="align-middle text-center">Marca</th>
                <th class="align-middle text-center">Modelo</th>
                <th class="align-middle text-center">Año</th>
                <th class="align-middle text-center">Asientos</th>
                {if $userLogged}
                    <th class="align-middle text-center">Patente</th>
                    <th class="align-middle text-center">Edición</th>
                    <th class="align-middle text-center">Eliminar</th>
                {/if}
            </tr>
            {foreach $vehiculos as $vehiculo}
                <tr>
                    <td class="align-middle text-center">{$vehiculo->marca}</td>
                    <td class="align-middle text-center">{$vehiculo->modelo}</td>
                    <td class="align-middle text-center">{$vehiculo->anio}</td>
                    <td class="align-middle text-center">{$vehiculo->asientos}</td>
                    {if $userLogged}
                        <td class="align-middle text-center">{$vehiculo->patente}</td>
                        <td ><button type="button" class="btn btn-dark d-grid gap-2 col-6 mx-auto">
                                <a href='formEditVehiculo/{$vehiculo->id}'
                                class="text-decoration-none fw-bold text-white">Editar</a></button></td>
                        <td ><button type="button" class="btn btn-dark d-grid gap-2 col-6 mx-auto">
                                <a href='deleteVehiculolById/{$vehiculo->id}'
                                class="text-decoration-none fw-bold text-white">Eliminar</a></button></td>
                    {/if}
                </tr>
            {/foreach}
        </table>
    </section>

    {include file="footer.tpl"}