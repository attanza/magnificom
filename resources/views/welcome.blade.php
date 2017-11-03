<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Magnificom-id.com</title>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('css/landing.css')}}">
</head>
<body>
<section class="hero is-dark is-fullheight bg-landing ">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title is-size-1-desktop animated zoomInDown">
        MAGNIFICOM
      </h1>
      <h2 class="subtitle animated zoomInUp">
       Let the idea be MAGNIFICENT
      </h2>
    </div>
  </div>
  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li><a href="{{url('/portfolio')}}">My Portfolio</a></li>
        </ul>
      </div>
    </nav>
  </div>
</section>
</body>
</html>
