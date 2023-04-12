<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('css')
    <link rel="stylesheet" href="{{ url('/web/assets/styles.css') }}">
    <link rel="stylesheet" href="{{ url('/web/assets/message.css') }}">
</head>

<body>
    <div class="ajax_load">
        <div class="ajax_load_box">
            <div class="ajax_load_box_circle"></div>
            <p class="ajax_load_box_title">Aguarde, carregando...</p>
        </div>
    </div>

    <div class="ajax_response"></div>

    @include('web.view.nav')

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>


    <script src="{{ url('/web/assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('/web/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ url('/web/assets/js/jquery.form.js') }}"></script>
    <script src="{{ url('/web/assets/js/jquery.mask.js') }}"></script>
    <script src="{{ url('/web/assets/js/scripts.js') }}"></script>

    @yield('scripts')
</body>

</html>
