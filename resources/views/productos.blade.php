@extends('base1')
@section('css')
@endsection
@section('nav')
    @parent
@show
@section('Contenido')
    <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <p style="color: #1b1e21;text-align:center;
        font-size:80px; letter-spacing: 50px;
        font-family: 'Open Sans Condensed', sans-serif;">Productos</p>
                <hr style="border: none; height: 1.2px;color: #333;background-color: #333;">
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-2 offset-2" style="text-align: center;">
                <a href="/productos" style="display: inline-block;" id="medidor">
                    <img src="images/infrarrojo.png"alt="Vega">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Medidores</p>
                </a>
            </div>
            <div class="col-md-2 offset-2" style="text-align: center;">
                <a href="/productos" style="display: inline-block;" id="agitador">
                    <img src="images/agitador.png"alt="Vega">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Agitadores</p>
                </a>
            </div>
            <div class="col-md-2 offset-2" style="text-align: center;">
                <a href="/productos" style="display: inline-block;" id="radar">
                    <img src="images/barometro.png"alt="Vega">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Radares</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2" style="text-align: center;">
                <a href="/productos" style="display: inline-block;" id="fluido">
                    <img src="images/agua.png"alt="Vega" style="height: 100px; width: 100px">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Fluidos</p>
                </a>
            </div>
            <div class="col-md-2 offset-2" style="text-align: center;">
                <a href="/productos" style="display: inline-block;" id="contenedor">
                    <img src="images/contenedordecarga.png"alt="Vega" style="height: 100px; width: 100px">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Contenedores</p>
                </a>
            </div>
            <div class="col-md-2 offset-2" style="text-align: center;">
                <a href="/productos" style="display: inline-block;" id="analizador">
                    <img src="images/radarvelocidad.png"alt="Vega" style="height: 100px; width: 100px">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Analizador</p>
                </a>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">

            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection