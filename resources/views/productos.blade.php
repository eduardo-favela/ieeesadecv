@extends('base1')
@section('css')
@endsection
@section('nav')
    @parent
@show
@section('Contenido')
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <script class="text/javascript">
        function showinfo(tipoproducto){
            var token=$("input[name=_token]").val();
            var tipoproducto=tipoproducto.id;
            var cont="";
            var nombres = $("#productos");

            if(nombres.text().length==0){

                        $('#progressbar').show(),

                $.ajax({
                    url:"/filtroproductos",
                // en data se envían los datos
                    data:{tipo:tipoproducto,_token:token},
                    type:"post",
                    dataType:'json',
                    success:function (response) {
                        // alert("sss");
                        $('#progressbar').css('display','none');
                        nombres.empty();
                        $.each(response, function(i,r){
                            cont+='<div class="card col-md-4 offset-1">' +
                                '  <img class="card-img-top" src="/images/Equipos/'+r.imagen+'" alt="Card image cap" style="padding-top: 5%; width: 348px; height:348px;">' +
                                '  <div class="card-body">' +
                                '<h5 class="card-title">'+r.nombre+'</h5>'+
                                '  </div>' +
                                '<div class="card-footer">' +
                                '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>' +
                                '</div>' +
                                '</div>'
                        });
                        nombres.append(cont);
                    }
                });
            }
            else{
                $(nombres).empty();
                $('#progressbar').css('display','none');
            }
        }

    </script>
    <style>
        #circle {
            margin-left: 30%;
            /*transform: translate(-50%,-50%);*/
            width: 150px;
            height: 150px;
        }

        .loader {
            width: calc(100% - 0px);
            height: calc(100% - 0px);
            border: 8px solid #162534;
            border-top: 8px solid #09f;
            border-radius: 50%;
            animation: rotate 5s linear infinite;
        }

        @keyframes rotate {
            100% {transform: rotate(360deg);}
        }
    </style>
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
                    <img src="images/infrarrojo.png" alt="Vega">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Medidores</p>
                </a>
            </div>
            <div class="col-md-2 offset-2" style="text-align: center;">
                <a href="/productos" style="display: inline-block;" id="agitador">
                    <img src="images/agitador.png" alt="AFX">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Agitadores</p>
                </a>
            </div>
            <div class="col-md-2 offset-2" style="text-align: center;">

                    <img src="images/barometro.png" alt="Vega" id="radares" onclick="return showinfo(this);">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Radares</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2" style="text-align: center;">
                    <img src="images/agua.png" alt="Nivus" style="height: 100px; width: 100px" id="fluidos" onclick="return showinfo(this);">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Fluidos</p>
            </div>
            <div class="col-md-2 offset-2" style="text-align: center;">
                <a href="/productos" style="display: inline-block;" id="contenedor">
                    <img src="images/contenedordecarga.png" alt="Contenedor" style="height: 100px; width: 100px">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Contenedores</p>
                </a>
            </div>
            <div class="col-md-2 offset-2" style="text-align: center;">
                <a href="/productos" style="display: inline-block;" id="analizador">
                    <img src="images/radarvelocidad.png" alt="Mintek" style="height: 100px; width: 100px">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Analizadores</p>
                </a>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container" style="display:none;" id="progressbar">
        <div class="row">
            <div class="col-md-4 offset-4">
                <div id="circle">
                    <div class="loader">
                        <div class="loader">
                            <div class="loader">
                                <div class="loader">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="productos">
        </div>
        <br><br><br>
    </div>
@endsection
@section('js')
@endsection