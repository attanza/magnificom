@extends('layouts.app_materialize')

@section('content')
<section class="h-100 bg-parallax" id="home">
  <header class="container h-100">
    <div class="d-flex align-items-center justify-content-center h-100">
      <div class="d-flex flex-column">
        <div class="text align-self-center p-2 is-colored text-heading-1">Dani & Maya</div>
        <div class="text align-self-center p-2 is-colored text-heading-2">Nov 25th, 2017</div>
      </div>
    </div>
  </header>
</section>

<section class="h-100 bg-detail" id="detail">
  <div class="container h-100">
    <div class="d-flex align-items-center justify-content-center h-100">
      <div class="d-flex flex-column" style="color: #fff;">
        <div class="row">
          <div class="col-md-4">
            <div class="text-heading-1">Our day</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <div class="row">
              <div class="col-3">
                <img src="{{asset('images/invitation/clock2.png')}}" class="img-fluid float-left mt-1" alt="">
              </div>
              <div class="col">
                <div class="text-heading-2">When</div>
              </div>
            </div>
            <div class="row">
              <div class="col-9 offset-3">
                <div class="text-heading-3">Saturday <br> November 25th, <br> 2017 <br> 3:00 O'clock</div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-3">
                <a href="https://www.google.com/maps/place/6%C2%B057'21.5%22S+107%C2%B039'51.4%22E/@-6.9559677,107.6620976,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-6.9559677!4d107.6642863?hl=en" target="_blank">
                  <img src="{{asset('images/invitation/marker.png')}}" class="img-fluid float-left ml-1 mt-2" alt="" width="80%">
                </a>
              </div>
              <div class="col">
                <div class="text-heading-2">Where</div>
              </div>
            </div>
            <div class="row">
              <div class="col-9 offset-3">
                <div class="text-heading-3">
                  Jl. Pluto Utara IV, no 10 <br> Margahayu Raya <br>Bandung <br> 40286
                </div>
                <div class="text-heading-4">
                  <a href="https://www.google.com/maps/place/6%C2%B057'21.5%22S+107%C2%B039'51.4%22E/@-6.9559677,107.6620976,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-6.9559677!4d107.6642863?hl=en" target="_blank">See on Google Map</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<section id="map" style="height: 50vh;">
  <div class="row" id="map" style="width: 100%;"></div>
</section>
<section id="photos">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    @for ($i = 1; $i < 7; $i++)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
    @endfor
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/invitation/1.jpg')}}" alt="First slide" height="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/invitation/2.jpg')}}" alt="First slide" height="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/invitation/3.jpg')}}" alt="First slide" height="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/invitation/4.jpg')}}" alt="First slide" height="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/invitation/6.jpg')}}" alt="First slide" height="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/invitation/7.jpg')}}" alt="First slide" height="100%">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
@endsection
@section('scripts')
  <script>
    function initMap() {
      var uluru = {lat: -6.9559677, lng: 107.6620976};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
        $('a[href^="#"]').on('click', function(event) {
            event.preventDefault();
            var bodyHeight = $(window).height();
            var target = this.hash;
            var $target = $(target);
            $('html, body').stop().animate( {
                'scrollTop': $target.offset().top
            }, 900, 'swing');
            if (target === '#map') {
              $('.nav-link').css('color', '#000');
            } else {
              $('.nav-link').css('color', '#fff');
            }
        });
    });
    $('.nav-link').on('click',function() {
      $('.navbar-collapse').collapse('hide');
    });
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFpPTB3UMqV1Gyonn9GpKB2L-HLhCIoQw&callback=initMap">
</script>
@endsection
