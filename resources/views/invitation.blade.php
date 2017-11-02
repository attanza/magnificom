@extends('layouts.app_materialize')

@section('content')
<section class="hero is-fullheight bg-parallax" id="home">
  <div class="hero-body">
    <div class="container">
      <h1 class="title has-text-centered is-colored is-size-1-desktop is-size-1-tablet is-size-3-mobile">
        Dani & Maya
      </h1>
      <h2 class="subtitle has-text-centered is-colored is-size-3-desktop ">
        ~ Nov 25th, 2017 ~
      </h2>
    </div>
  </div>
</section>
{{-- <hero-image></hero-image> --}}
<section class="hero is-fullheight bg-detail" id="detail">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column is-4">
          <h1 class="title has-text-white is-size-1-desktop has-text-right-desktop is-size-1-tablet is-size-3-mobile">
            Our day
          </h1>
        </div>
      </div>
      <div class="columns">
        <div class="column is-one-third-desktop  is-offset-one-third-desktop is-half-tablet">
          <div class="has-text-white is-size-3-desktop is-size-4-tablet">
            <figure class="image is-64x64" style="margin-left: -10px;">
              <img src="{{asset('images/invitation/clock2.png')}}">
            </figure>
            <p>
              Saturday <br> November, 25th <br> 2017 <br> 3:00 pm
            </p>
          </div>
        </div>
        <div class="column is-one-third-desktop is-half-tablet">
          <div class="has-text-white">
            <figure class="image is-48x48">
              <img src="{{asset('images/invitation/marker.png')}}">
            </figure>
            <p class="is-size-3-desktop is-size-4-tablet m-t-5">
              Jl. Pluto Utara IV no. 10 <br> Margahayu Raya <br> Bandung <br> 40286
            </p>
            <p class="is-size-4-desktop is-size-4-tablet">
              <a href="https://www.google.com/maps/place/6%C2%B057'21.5%22S+107%C2%B039'51.4%22E/@-6.9559677,107.6620976,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-6.9559677!4d107.6642863?hl=en" target="_blank">See on Google Map</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="map">
    <wedding-location></wedding-location>
</section>
<section id="photos">
    <my-carousel></my-carousel>
</section>
<back-top></back-top>
@endsection
