<h5> Consulta de Clientes</h5>

<form action="{{ url("/") }}" class="ajax_off" method="get">

<input type="hidden" name="search" value="true">
<div class="row align-items-center mt-4">
    <div class="col-lg-3 mb-3">
        <label for="" class="d-flex align-items-center"><b>CPF:</b> <input type="text" name="document" class="form-control mx-1 mask-doc"></label>
    </div>
    <div class="col-lg-3 mb-3">
        <label for="" class="d-flex align-items-center"><b>Nome:</b> <input type="text" name="name" class="form-control mx-1"></label>
    </div>
    <div class="col-lg-3 mb-3">
        <label for="" class="d-flex align-items-center"><b>Data de Nascimento:</b> <input type="date" name="date_birth" class="form-control mx-1"></label>
    </div>
    <div class="col-lg-3 mb-3 ">
        <div class="d-flex">
            <label for=""><b>Sexo: </b></label>
            <label for="m" class="mx-2"><input checked type="radio" name="genre" value="M" id="m"> Masculino</label>
            <label for="f" class="mx-2"><input type="radio" name="genre" value="F" id="f"> Feminino</label>
        </div>
    </div>
    <div class="col-lg-6 mb-3">
        <label for="" class="d-flex align-items-center"> 
            <b>Estado:</b>
            <select name="states" id="Estado" class="form-select mx-1">
                
            </select>
        </label>
    </div>
    <div class="col-lg-6 mb-3">
        <label for="" class="d-flex align-items-center">
            <b>Cidade:</b> 
            <select name="city" id="Cidade" class="form-select mx-1">
                <option value="all">Todos</option>
            </select>
        </label>
    </div>

    <div class="col-lg-12 text-end">
        <button class="btn btn-primary">Pesquisar</button>
        <a href="{{url("/")}}"  class="btn btn-secondary clear">Limpar</a>
    </div>
</div>
</form>