@extends('base1')
@section('css')

@endsection
@section('nav')
    @parent
@show
@section('Contenido')
    <br><br><br><br>
        <div class="col-md-12" style="background-image:url('/images/doradas.jpg');
 background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
height:500px; text-align: center;">
            <br><br><br><br><br><br><br>
            <div style="display: inline-block">
                <div class="col-md-12" style="text-align: center"><p style="color: #FFFFFF;text-align:center;
        font-size:80px; letter-spacing:50px;
        padding-left: 50px;
        font-family: 'Open Sans Condensed', sans-serif;">Bienvenido</p></div>
            </div>
        </div>
<br><br>
<p style="text-align:center; font-size:35px; font-family: 'Open Sans Condensed', sans-serif;
 letter-spacing:12px; text-decoration: underline;">Control, Medición y Automatización</p>
<br><br>
<div class="col-md-12" style="background-image:url('/images/fondo2.jpeg');
 background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
height:500px">
</div>
    <br><br>
    <p style="text-align:center; font-size:35px; font-family: 'Open Sans Condensed', sans-serif;
 letter-spacing:2px;">Nos dedicamos a la comercialización de sistemas de medición para el control de procesos industriales.</p>
    <br><br>
@endsection
@section('js')
@endsection