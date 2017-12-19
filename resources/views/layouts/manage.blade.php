<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Area</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/manage/manage.css') }}" rel="stylesheet">
    @yield('styles')
  </head>
  <body>
    <div id="app">
      @include('layouts.partials.manage.topNav')
      <div class="columns">
        <div class="column is-one-quarter">
          @include('layouts.partials.manage.sidebar')
        </div>
        <div class="column content-wrapper">
          @yield('content')
        </div>
      </div>
    </div>
    <script src="{{ asset('js/manage.js') }}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
    $el.addEventListener('click', function () {
    // Get the target from the "data-target" attribute
    var target = $el.dataset.target;
    var $target = document.getElementById(target);
    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
    $el.classList.toggle('is-active');
    $target.classList.toggle('is-hidden-mobile');
    });
    });
    }
    });
    </script>
    @yield('scripts')
  </body>
</html>