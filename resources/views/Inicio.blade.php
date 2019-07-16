@extends('base1')
@section('css')

@endsection
@section('nav')
    @parent
@show
@section('Contenido')
<div class="col-md-12" style="background-image:url('/images/doradas.jpg');
 background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
height:500px; text-align: center">
    <div style="padding-top: 240px;display: inline-block">
        <div class="col-md-12" style="text-align: center"><p style="color: #FFFFFF;text-align:center;
        font-size:80px; letter-spacing:50px;
        padding-left: 50px;
        font-family: 'Century Gothic';">Bienvenido</p></div>
    </div>
</div>
<br><br>
<p style="text-align:center; font-size:35px; font-family:'Simplifica'; letter-spacing:12px; text-decoration: underline;">Control, Medición y Automatización</p>
<br><br>
<div class="col-md-12" style="background-image:url('/images/paneles.jpeg');
 background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
height:500px">
</div>
<br><br><br><br><br><br>
<h5>hola</h5>
@endsection
@section('js')
@endsection