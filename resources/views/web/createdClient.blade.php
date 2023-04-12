@extends('web.template')

@section('content')
    <div class="mt-5">
        @include('web.view.formClients', ['cadastro' => true])
    </div>
@endsection
