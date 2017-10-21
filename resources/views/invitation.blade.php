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
<section class="hero is-fullheight bg-detail" id="detail">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column is-4">
          <h1 class="title has-text-white is-size-1-desktop has-text-right-desktop is-size-1-tablet">
            Our day
          </h1>
        </div>
      </div>
      <div class="columns">
        <div class="column is-one-third-desktop  is-offset-one-third-desktop is-half-tablet is-12-mobile">
          <div class="has-text-white is-size-3-desktop is-size-4-tablet">
            <p>
              <span class="icon is-large m-b-20">
                <i class="fa fa-clock-o"></i>
              </span>When
            </p>
            <p class="m-l-50">
              Saturday <br> November, 25th <br> 2017 <br> 3:00 O'clock
            </p>
          </div>
        </div>
        <div class="column is-one-third-desktop  is-half-tablet is-12-mobile">
          <div class="has-text-white">
            <p class="is-size-3-desktop is-size-4-tablet">
              <span class="icon is-large  m-b-20">
                <i class="fa fa-map-marker"></i>
              </span>Where
            </p>
            <p class="m-l-50 is-size-4-desktop is-size-4-tablet">
              Jl. Pluto Utara IV no. 10 <br> Margahayu Raya <br> Bandung <br> 40286
            </p>
            <p class="m-l-50 is-size-4-desktop is-size-4-tablet">
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
<back-to-top text="Back to top" visible-offset="400"></back-to-top>

@endsection
