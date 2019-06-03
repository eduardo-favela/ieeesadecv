<!DOCTYPE html>
<html>
<head>
    <title>IEEE | Ingeniería electrónica y equipos eléctricos</title>
    <link rel="stylesheet" type="text/css" href={{url(("/css/bootstrap.css"))}}>
    <link rel="stylesheet" type="text/css" href={{url(("/css/easy-autocomplete.css"))}}>
    <link rel="stylesheet" type="text/css" href={{url(("/css/easy-autocomplete.themes.css"))}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="{{url('/images/icono.png')}}">

    @yield('cssextra')
    <style>
        .encabezado{
            font-family: "Century Gothic";
            font-size: 30px;
        }
    </style>
</head>
<body>
@section('nav')

     <nav class="navbar navbar-light bg-light">
         <a class="navbar-brand">Navbar</a>
         <form class="form-inline">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
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
