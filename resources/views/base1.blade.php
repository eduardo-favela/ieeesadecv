<!DOCTYPE html>
<html>
<head>
    <title>IEEE | Ingeniería electrónica y equipos eléctricos</title>
    <link rel="stylesheet" type="text/css" href={{url(("/css/bootstrap.css"))}}>
    <link rel="stylesheet" type="text/css" href={{url(("/css/easy-autocomplete.css"))}}>
    <link rel="stylesheet" type="text/css" href={{url(("/css/easy-autocomplete.themes.css"))}}>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Allerta+Stencil' rel='stylesheet' type='text/css'>    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

     <nav class="navbar navbar-light bg-light" style="border-bottom-style:solid;border-bottom-color:#428bca;border-bottom-width:5px">
         <a class="navbar-brand" style="font-family: 'Allerta Stencil', sans-serif;font-size: 45px">Ieee s.a. de c.v.</a>
         <div class="dropdown">
             <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Más información
             </button>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <a class="dropdown-item" href="#">
                     <i class="material-icons">contact_mail</i>
                     Contacto
                 </a>
                 <a class="dropdown-item" href="#">Otra acción</a>
                 <a class="dropdown-item" href="#">Something else here</a>
             </div>
         </div>
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
