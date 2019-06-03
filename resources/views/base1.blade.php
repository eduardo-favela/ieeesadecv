<!DOCTYPE html>
<html>
<head>
    <title>IEEE | Ingeniería electrónica y equipos eléctricos</title>
    <link rel="stylesheet" type="text/css" href={{url(("/css/materialize.css"))}}>
    <link rel="stylesheet" type="text/css" href={{url(("/css/easy-autocomplete.css"))}}>
    <link rel="stylesheet" type="text/css" href={{url(("/css/easy-autocomplete.themes.css"))}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon"
          type="image/png"
          href="{{url('/images/icono.png')}}">

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

    <nav style="height: max-content">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">
                <img src="/images/encabezado.png">
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
            </ul>
        </div>
    </nav>



{{--    <div class="navbar-fixed">--}}
{{--        <nav style="background-color:#ffffff; border-bottom:5px solid #1f6fb2">--}}
{{--            <div class="nav-wrapper">--}}
{{--                <a href="/">--}}
{{--                    <img src="/images/encabezado.png">--}}
{{--                </a>--}}
{{--                <p class="encabezado">Ingeniería electrónica y equipos eléctricos</p>--}}
{{--                <a href="/">--}}
{{--                    <i style="font-size:40px; color: #1d2124" class="fa">&#xf03e;</i><span style="color:black;font-size:15px;--}}
{{--                    padding:0px 0 5px 0; display:block;">Galería</span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </div>--}}
@show
@section('Contenido')

@show

@yield('javascript')
<script src="{{url('/js/jquery-3.3.1.js')}}"></script>
<script src="{{url('/js/Popper.js')}}"></script>
<script src="{{url('/js/materialize.js')}}"></script>
<script src="{{url('/js/jquery.easy-autocomplete.js')}}"></script>
</body>
</html>
