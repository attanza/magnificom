<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Magnificom-id.com</title>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style type="text/css">
.mag-bg {
  background-image: url("/images/mag_bg.jpeg");
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
}
</style>
</head>
<body>
<section class="hero is-success is-fullheight mag-bg">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        MAGNIFICOM
      </h1>
    </div>
  </div>
</section>
</body>
</html>
