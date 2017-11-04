@extends('portfolio.portfolio_master')
@section('content')
<div id="home" class="scrollspy">
  <div class="parallax-container">
    <div class="parallax"><img src="{{ asset('images/portfolio/bg_home.jpg') }}"></div>
    <div class="top-spacer"></div>
    <div class="valign-wrapper" style="height: 100%;">
        <div class="container">
          <div class="row">
            <div class="col m6">
              <img class="responsive-img" src="{{ asset('images/portfolio/dani.png') }}">
              <h5>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </h5>
              <a class="waves-effect btn-large amber accent-1">
                <span class="grey-text text-darken-3">Send My Resume</span>
              </a>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<div id="knowledge" class="scrollspy">
  <div class="parallax-container">
    <div class="parallax"><img src="{{ asset('images/portfolio/bg_knowledge.jpg') }}"></div>
    <div class="top-spacer"></div>
    <div class="valign-wrapper" style="height: 100%;">
        <div class="container">
          <div class="row">
            <div class="col m6">
              <img class="responsive-img" src="{{ asset('images/portfolio/dani.png') }}">
              <h5>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </h5>
              <a class="waves-effect btn-large amber accent-1">
                <span class="grey-text text-darken-3">Send My Resume</span>
              </a>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@stop