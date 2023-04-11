@if ($cadastro)
    
<div class="border_1px_black">
    <div class="p-3">
        <h5><a href="{{ url("/") }}"><i class="bi bi-arrow-left-circle-fill"></i></a> Cadastro de Cliente</h5>
        @if (isset($errors) && count($errors) > 0)
            <div class="text-center">
                @foreach ($errors->all() as $erro)
                    <div class="alert alert-warning">{{$erro}} <br></div>
                @endforeach
            </div>
        @endif

        @if (session('sucesso'))
            <div class="alert alert-success">
                {{ session('sucesso') }}
            </div>
        @endif

        <form action="{{ url("/created") }}" class="ajax_off" method="post">
            @csrf
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
                <div class="col-lg-4 mb-3">
                    <label for="" class="d-flex align-items-center"><b>Endereço:</b> <input type="text" name="address" class="form-control mx-1"></label>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="d-flex align-items-center"> 
                        <b>Estado:</b>
                        <select name="states" id="Estado" class="form-select mx-1">
                        </select>
                    </label>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="d-flex align-items-center">
                        <b>Cidade:</b> 
                        <select name="city" id="Cidade" class="form-select mx-1">
                        </select>
                    </label>
                </div>

                <div class="col-lg-12 text-end">
                    <button class="btn btn-primary">Salvar</button>
                    <button class="btn btn-secondary clear">Limpar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@else

<div class="border_1px_black">
    <div class="p-3">
        <h5><a href="{{ url("/") }}"><i class="bi bi-arrow-left-circle-fill"></i></a> Editar Cliente</h5>
        @if (isset($errors) && count($errors) > 0)
            <div class="text-center">
                @foreach ($errors->all() as $erro)
                    <div class="alert alert-warning">{{$erro}} <br></div>
                @endforeach
            </div>
        @endif

        @if (session('sucesso'))
            <div class="alert alert-success">
                {{ session('sucesso') }}
            </div>
        @endif

        <form action="{{ url("/update/$client->id") }}" class="ajax_off" method="post">
            @csrf
            @method('PUT')
            <div class="row align-items-center mt-4">
                <div class="col-lg-3 mb-3">
                    <label for="" class="d-flex align-items-center"><b>CPF:</b> <input type="text" value="{{$client->document}}" name="document" class="form-control mx-1 mask-doc"></label>
                </div>
                <div class="col-lg-3 mb-3">
                    <label for="" class="d-flex align-items-center"><b>Nome:</b> <input type="text" value="{{$client->name}}" name="name" class="form-control mx-1"></label>
                </div>
                <div class="col-lg-3 mb-3">
                    <label for="" class="d-flex align-items-center"><b>Data de Nascimento:</b> <input value="{{$client->date_birth}}" type="date" name="date_birth" class="form-control mx-1"></label>
                </div>
                <div class="col-lg-3 mb-3 ">
                    <div class="d-flex">
                        <label for=""><b>Sexo: </b></label>
                        <label for="m" class="mx-2"><input type="radio" {{ ($client->genre == "M" ? "checked" : "") }} name="genre" value="M" id="m"> Masculino</label>
                        <label for="f" class="mx-2"><input type="radio" {{ ($client->genre == "F" ? "checked" : "") }}  name="genre" value="F" id="f"> Feminino</label>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="d-flex align-items-center"><b>Endereço:</b> <input type="text" value="{{$client->address}}" name="address" class="form-control mx-1"></label>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="d-flex align-items-center"> 
                        <b>Estado:</b>
                        <select name="states" id="Estado" class="form-select mx-1">
                        <option value="{{$client->states}}">{{$client->states}}</option>
                        </select>
                    </label>
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="" class="d-flex align-items-center">
                        <b>Cidade:</b> 
                        <select name="city" id="Cidade" class="form-select mx-1">
                        <option value="{{$client->city}}">{{$client->city}}</option>
                        </select>
                    </label>
                </div>

                <div class="col-lg-12 text-end">
                    <button class="btn btn-primary">Atualizar</button>
                    <button class="btn btn-secondary clear">Limpar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endif



