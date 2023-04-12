@extends('web.template')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <div>
                <h3>Clientes</h3>
            </div>
            <div><a href="{{ url('/created') }}" class="btn btn-primary">Cadastrar Cliente</a></div>
        </div>
        @if (session('sucesso'))
            <div class="alert alert-success">
                {{ session('sucesso') }}
            </div>
        @endif
        <div class="p-3 border_1px_black mt-3">
            @include('web.view.search')
        </div>

        @if ($client)
            @include('web.view.datadable', ['client' => $client])
        @else
            <div class="text-center p-3 border_1px_black mt-3">Nenhum Cliente encontrado</div>
        @endif

    </div>
@endsection
