@extends('base1')
@section('css')
@endsection
@section('nav')
    @parent
@show
@section('Contenido')
    <div style="border-bottom-style:solid;border-bottom-width:2px;border-bottom-color:#428bca;">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner" style="height: 450px">
                <div class="carousel-item active">
                    <img class="d-block w-100" style="height: 450px" src="{{url('/images/loadscan.jpg')}}"
                         alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 450px" src="https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg"
                         alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 450px" src="https://mdbootstrap.com/img/Photos/Slides/img%20(17).jpg"
                         alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


{{--            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
{{--                <div class="carousel-inner">--}}
{{--                    <div class="carousel-item active">--}}
{{--                        <img class="d-block w-100" src="http://ieeesadecv.com/images/loadscan.jpg" alt="First slide">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item">--}}
{{--                        <img class="d-block w-100" src="http://ieeesadecv.com/images/loadscan.jpg" alt="Second slide">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item">--}}
{{--                        <img class="d-block w-100" src="http://ieeesadecv.com/images/loadscan.jpg" alt="Third slide">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </a>--}}
{{--                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </a>--}}
{{--            </div>--}}
    </div>
<br><br><br><br><br>
    <h5>Hola</h5>
@endsection
@section('js')
@endsection