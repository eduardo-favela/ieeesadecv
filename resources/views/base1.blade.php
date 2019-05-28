<!DOCTYPE html>
<html>
<head>
    <title>IEEE | Ingeniería electrónica y equipos eléctricos</title>
    <link rel="stylesheet" type="text/css" href={{url(("/css/bootstrap.css"))}}>
    <link rel="stylesheet" type="text/css" href={{url(("/css/easy-autocomplete.css"))}}>
    <link rel="stylesheet" type="text/css" href={{url(("/css/easy-autocomplete.themes.css"))}}>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="icon"
          type="image/png"
          href="{{url('/images/icono.png')}}">

    @yield('cssextra')
    <style>
        .encabezado{
            font-family: "Century Gothic";
            font-size: 30px;
            font-style: oblique;
        }
    </style>
</head>
<body>
@section('nav')
    <nav class="navbar navbar-light align-content-md-center" style="background-color:#e8e2ff;">

        <a class="navbar-brand align-content-center" href="/">
            <img src="/images/encabezado.png">
        </a>
        <p class="encabezado">Ingeniería electrónica y equipos eléctricos</p>


{{--        <form class="form-inline">--}}
{{--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
{{--        </form>--}}
    </nav>
@show
@section('Contenido')

@show

@yield('javascript')
<script src="{{url('/js/jquery-3.3.1.js')}}"></script>
<script src="{{url('/js/Popper.js')}}"></script>
<script src="{{url('/js/bootstrap.js')}}"></script>
<script src="{{url('/js/jquery.easy-autocomplete.js')}}"></script>
</body>
</html>
