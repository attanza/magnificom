@extends('layouts.app_materialize')

@section('content')
<div class="d-flex h-100 bg-parallax" id="home">
  <div class="justify-content-center" style="margin: auto">
    <div class="row ">
     <div class="col-xs-12">
       <h1 class="display-4 is-colored">Dani & Maya</h1>
     </div>
    </div>
    <div class="row ">
     <div class="col-xs-12">
       <h1 class="display-6 is-colored">Nov 25th, 2017</h1>
     </div>
    </div>
  </div>
</div>
<div class="d-flex h-75 bg-detail" id="detail">
  <div class="container justify-content-center" style="margin: auto; color: #fff;">
    {{-- <div class="row d-none d-sm-block">
      <div style="height: 100px;"></div>
    </div> --}}
    <div class="row">
      <div class="col-md-4">
        <h1 class="display-3 mt-5">Our day</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="row">
          <div class="col-3">
            <img src="{{asset('images/invitation/clock2.png')}}" class="img-fluid float-left" alt="">
          </div>
          <div class="col mt-3">
            <h1>When</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-9 offset-3">
            <p class="h2">Saturday <br> November 25th, <br> 2017 <br> 3:00 O'clock</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-3">
            <img src="{{asset('images/invitation/marker.png')}}" class="img-fluid float-left" alt="">
          </div>
          <div class="col mt-3">
            <h1>Where</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-9 offset-3">
            <p class="h4">Jl. Pluto Utara IV, no 10 <br> Margahayu Raya <br>Bandung <br> 40286</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="map" style="height: 30vh;">
  <div class="row" id="map"></div>
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
      <img class="d-block w-100" src="{{asset('images/invitation/3.jpg')}}" alt="First slide" height="100%">
    </div>
    @for ($i = 1; $i < 7; $i++)
      @php
        $photo = 'images/invitation/'.$i.'.jpg';
      @endphp
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset($photo)}}" alt="">
      </div>
    @endfor
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
      var uluru = {lat: -6.9559758, lng: 107.6620611};
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
