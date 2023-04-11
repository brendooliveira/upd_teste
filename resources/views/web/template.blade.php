<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
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

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="{{url("/")}}"><img src="https://www.upd8.com.br/content/agency2/images/logo_upd8_stick2.png" width="50px" alt="" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url("/")}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url("/created")}}">Cadastrar</a>
              </li>
    
            </ul>

          </div>
        </div>
      </nav>


    <div class="container">
        @yield('content')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>


    <script src="{{ url("/web/assets/js/jquery.min.js") }}"></script>
    <script src="{{ url("/web/assets/js/jquery-ui.js") }}"></script>
    <script src="{{ url("/web/assets/js/jquery.form.js") }}"></script>
    <script src="{{ url("/web/assets/js/jquery.mask.js") }}"></script>
    <script src="{{ url("/web/assets/js/scripts.js") }}"></script>

    @yield('scripts')
</body>
</html>