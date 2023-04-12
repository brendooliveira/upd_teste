@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
@endsection

<div class="">

    <div class="border_1px_black mt-3">
        <div class="p-4">
            <table id="clients" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Editar</th>
                        <th>Excluir</th>
                        <th>Visualizar</th>
                        <th>Cliente</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th>Sexo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($client as $client)
                        <tr>
                            <td><a href="{{ url("/update/$client->id") }}" class="btn btn-success w-100">Editar</a></td>
                            <td>
                                <form action="{{ url("/deleted/$client->id") }}" class="ajax_off" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger w-100">Excluir</button>
                                </form>
                            </td>
                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#show{{ $client->id }}"
                                    class="btn btn-info w-100">Ver</a></td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->document }}</td>
                            <td>{{ $client->date_birth }}</td>
                            <td>{{ $client->states }}</td>
                            <td>{{ $client->city }}</td>
                            <td>{{ $client->genre }}</td>
                        </tr>
                        @include('web.view.modalCliente', ['client', $client])
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>


</div>

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#clients').DataTable({
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
                }
            });
        });
    </script>
@endsection
