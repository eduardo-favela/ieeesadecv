@extends('base1')
@section('css')

@endsection
@section('nav')
    @parent
@show
<script class="text/javascript">
    function sendmail(){
        var token=$("input[name=_token]").val();
        var cont='';
        var cont2=$("#alerta");
       var nombre=$("input[id=nombre]").val();
           var email=$("input[id=email]").val();
           var telefono=$("input[id=telefono]").val();
           var asunto=$("input[id=asunto]").val();
           var mensaje=$("textarea[id=mensaje]").val();

        if(nombre=="" || mensaje=="" || telefono=="" || asunto=="" || email=="")
        {
            cont2.empty();
                cont+='<div class="alert alert-danger col-md-8 offset-2" role="alert">'
                    +'<p style="text-align: center;">Su correo no pudo ser enviado, todos los campos deben ser llenados</p>' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '    <span aria-hidden="true">&times;</span>' +
                    '  </button>'
                    +'</div>';
            cont2.show();
            cont2.append(cont);
        }
        else{
            $.ajax({
                url:"/sendmail",
                data:{nombre:nombre,
                    email:email, telefono:telefono, asunto:asunto,
                    mensaje:mensaje, _token:token},
                type:"post",
                dataType:'json',
                success:function (response) {
                    cont2.empty();
                    $.each(response, function(i,r){
                        cont+='<div class="alert alert-success col-md-8 offset-2" role="alert">'
                            +'<p style="text-align: center;">'+r+'</p>' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                            '    <span aria-hidden="true">&times;</span>' +
                            '  </button>'
                            +'</div>';
                    });
                    cont2.show();
                    cont2.append(cont);
                }
            });
        }
    }
</script>
@section('Contenido')
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p style="font-size:25px;text-align: center; font-family:'Open Sans Condensed'; letter-spacing:5px;">Envíenos un correo electrónico</p>
            </div>
            <div class="col-md-6 offset-2">
                <p style="font-size:25px;text-align:center; margin-top: 5%; font-family:'Open Sans Condensed'; letter-spacing:5px;">Nuestra dirección:</p>
            </div>
        </div>
    </div>
   <div class="container">
       <div class="row">
           <div class="col-md-4">
                   <div class="form-group">
                       <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre Completo">
                   </div>
                   <div class="form-group">
                       <input name="email" type="text" class="form-control" id="email" placeholder="E-mail">
                   </div>
                   <div class="form-group">
                       <input name="telefono" type="text" class="form-control" id="telefono" placeholder="Teléfono con lada">
                   </div>
                   <div class="form-group">

                       <input name="asunto" type="text" class="form-control" id="asunto" placeholder="Asunto">
                   </div>
                   <div class="form-group">
                       <textarea name="mensaje" cols="35" rows="8" class="form-control" id="mensaje" placeholder="Su mensaje"></textarea>
                   </div>
                   <button type="reset" class="btn btn-danger">Borrar</button>

                   <button type="button" onclick="return sendmail();" class="btn btn-primary">Enviar</button>

           </div>
           <div class="col-md-6 offset-2">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.708788226216!2d-103.4023048855278!3d25.51475692500575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fdc81e930e283%3A0xb8fbf0aba512b2ab!2sCalle+Av+Paseo+de+La+Soledad+540%2C+La+Rosita%2C+Amp+la+Rosita%2C+27258+Torre%C3%B3n%2C+Coah.!5e0!3m2!1ses!2smx!4v1449945010668"
                       width="538" height="420"  frameborder="0" style="border-radius: 5px; border-style: solid;
                        border-color: #d3d3d3; border-width: 1px;"
                       allowfullscreen=""></iframe>
               <p style="font-size:18px;text-align: center; font-family:'Open Sans Condensed';
                letter-spacing:2px;">Av. Paseo de la soledad #540, amp. La rosita, Torreón Coahuila México.</p>
           </div>
       </div>
       <br>
       <div class="row" id="alerta">

       </div>
   </div>
    <br><br>
@endsection
@section('js')

@endsection