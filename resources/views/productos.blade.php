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
            var tipodeproducto=tipoproducto.id;
            var cont="";
            var nombres = $("#productos");
            if(nombres.text().length==0){
                        $('#progressbar').show(),
                            $.ajax({
                                url:"/filtroproductos",
                                data:{tipo:tipodeproducto,_token:token},
                                type:"post",
                                dataType:'json',
                                success:function (response) {
                                    // alert("sss");
                                    $('#progressbar').css('display','none');
                                    nombres.empty();
                                        $.each(response, function(i,r){
                                            cont+='<div class="card col-md-4 offset-1" id="card">' +
                                                '  <img class="card-img-top" src="/images/Equipos/'+r.imagen+
                                                '" alt="Card image cap" style="padding-top: 5%; width: 348px; height:348px;">' +
                                                '  <div class="card-body">' +
                                                '<h5 class="card-title" id="titulocard">'+r.nombre+'</h5>'+
                                                '  </div>' +
                                                '<div class="card-footer">' +
                                                '<p class="card-text">'+r.descripcion+'</p>' +
                                                '</div>' +
                                                '</div>'
                                        });
                                        nombres.append(cont);
                    }
                });
            }
            else if(tipoproducto.id==tipodeproducto){
                $('#progressbar').show(),
                    $(nombres).empty();
                $.ajax({
                    url:"/filtroproductos",
                    // en data se envían los datos
                    data:{tipo:tipodeproducto,_token:token},
                    type:"post",
                    dataType:'json',
                    success:function (response) {
                        // alert("sss");
                        $('#progressbar').css('display','none');
                        nombres.empty();
                            $.each(response, function(i,r){
                                cont+=
                                    '<div class="card col-md-3 offset-1" id="card" style="margin-top: 5%">' +
                                    '  <img class="card-img-top" id="cardimage" src="/images/Equipos/'+r.imagen+'" alt="Card image cap" ' +
                                    'style="padding-top: 5%; width:100%px; height:100%px;">' +
                                    '  <div class="card-body">' +

                                    '  </div>' +
                                    '<div class="card-footer">' +
                                    '<h5 class="card-title" id="titulocard">'+r.nombre+'</h5>'+
                                    '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>' +
                                    '</div>' +
                                    '</div>'
                            });
                            nombres.append(cont);
                    }
                });
            }
        }

        $(document).ready(function() {
            $(".boxShadow").on('click', function() {
                $(".boxShadow").each(function() {
                    $(this).css({
                        "box-shadow": "none"
                    });
                });
                $(this).css({
                    "box-shadow": "inset 0 1px 1px #292986, 0 0 8px #292986",
                    "border-top-left-radius": "5px",
                    "border-top-right-radius":"5px",
                    "border-bottom-right-radius":"5px",
                    "border-bottom-left-radius": "5px",
                    "border-color":"#FFFFFF"
                });
            });
        });

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
        font-family: 'Open Sans Condensed', sans-serif; padding-left:5%;">Productos</p>
                <hr style="border: none; height: 1.2px;color: #333;background-color: #333;">
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-2 offset-2 boxShadow" style="text-align: center; cursor:pointer;" id="medidores" onclick="return showinfo(this);">
                    <img src="images/infrarrojo.png" alt="Vega">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Medidores de carga</p>
            </div>
            <div class="col-md-2 offset-2 boxShadow" style="text-align: center;cursor:pointer; padding-top:2%;" id="agitadores"  onclick="return showinfo(this);">
                    <img src="images/agitador.png" alt="AFX">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Agitadores</p>
            </div>
            <div class="col-md-2 offset-2 boxShadow" style="text-align: center;cursor:pointer; padding-top:2%;"  id="radares" onclick="return showinfo(this);">
                    <img src="images/barometro.png" alt="Vega">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Medidores de nivel</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 boxShadow" style="text-align: center;cursor:pointer;"  id="fluidos" onclick="return showinfo(this);">
                    <img src="images/agua.png" alt="Nivus" style="height: 100px; width: 100px; padding-top:5%;">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Medidores de flujo</p>
            </div>
            <div class="col-md-2 offset-2 boxShadow" style="text-align: center;cursor:pointer;" id="contenedores" onclick="return showinfo(this);">
                    <img src="images/contenedordecarga.png" alt="Contenedor"  style="height: 100px; width: 100px" >
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Contenedores</p>
            </div>
            <div class="col-md-2 offset-2 boxShadow" style="text-align: center;cursor:pointer;" id="analizadores"  onclick="return showinfo(this);">
                    <img src="images/radarvelocidad.png" style="height: 100px; width: 100px"  alt="Mintek">
                    <br>
                    <p style="text-align: center; color: #292986;
                     font-family:'Open Sans Condensed', sans-serif; font-size: 25px">Analizadores</p>
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