<!-- Modal -->
<div class="modal fade" id="show{{$client->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Visualizar [ID: {{$client->id}}]</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p><b>Nome:</b> {{$client->name}}</p>
            <p><b>Data de Nascimento:</b> {{ date('d/m/Y', strtotime($client->date_birth)) }}</p> 
            <p><b>Documento:</b> {{$client->document}}</p> 
            <p><b>Endereço:</b> {{$client->address}}</p>
            <p><b>Cidade:</b> {{$client->city}}</p>
            <p><b>Estado:</b> {{$client->states}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">FECHAR</button>
        </div>
      </div>
    </div>
  </div>