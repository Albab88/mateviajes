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
          </div>
      </div>
    {/foreach}
    
    </section>
    </main>



{include file="footer.tpl"}