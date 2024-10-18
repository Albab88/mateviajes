{include file="header.tpl"}
  
  <main class="container mt-5">
  <section class="viajes">
  
    {foreach $destinos as $destino}
      <div class="card">
        <img src="img/{$destino->destino}.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{$destino->destino}</h5>
          <h6 class="card-title">{$destino->fecha|date_format:"%d-%m-%Y"}</h6>
          <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#collapse{$destino->id}" role="button" aria-expanded="true" aria-controls="collapseExample">
            Más Info...
          </a>
          {if $userLogged}
            <td><button type="button" class="btn btn-dark"><a href='formEditViaje/{$destino->id}'
              class="text-decoration-none fw-bold text-white">Editar</a></button></td>
            <td><button type="button" class="btn btn-dark"><a href='eliminarViaje/{$destino->id}'
              class="text-decoration-none fw-bold text-white">Eliminar</a></button></td>
          {/if}
          <div class="collapse" id="collapse{$destino->id}" style="">
            <div class="card card-body">
              <p>{$destino->descripcion}</p>
              <h6>Un viaje para {$destino->pasajeros} pasajeros.</h6>
              <h6>Salimos a las: {$destino->horario|date_format:"%H:%M"} hs.</h6>
            </div>
          </div>
        </div>
      </div>
    {/foreach}
  
  </section>
  </main>

{include file="footer.tpl"}