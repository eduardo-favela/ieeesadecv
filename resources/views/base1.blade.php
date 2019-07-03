<!DOCTYPE html>
<html>
<head>
    <title>IEEE | Ingeniería electrónica y equipos eléctricos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link href='https://fonts.googleapis.com/css?family=Allerta+Stencil' rel='stylesheet' type='text/css'>
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

     <nav class="navbar navbar-light bg-light" style="border-bottom-style:solid;border-bottom-color:#428bca;border-bottom-width:2px">
         <a class="navbar-brand" style="font-family: 'Allerta Stencil', sans-serif;font-size:38px; color:#428bca;">Ieee s.a. de c.v.</a>
         <div class="dropdown">
             <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Más información
             </button>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <a class="dropdown-item" href="#">
                     <i style='font-size:20px' class='fas'>&#xf02c;</i>
                     Productos</a>
                 <a class="dropdown-item" href="#">
                     <i style='font-size:20px' class='fas'>&#xf7d9;</i>
                        Servicios
                 </a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#">
                     <i class="material-icons" style="font-size: 23px">contact_mail</i>
                     Contacto
                 </a>
             </div>
         </div>
     </nav>
@show
@section('Contenido')

@show
@yield('javascript')

</body>
</html>
