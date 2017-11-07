<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Dani Lesmiadi Portfolio</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/portfolio/portfolio.css') }}">
</head>
<body>
<div id="app">
  {{-- @include('portfolio.navbar') --}}
    <main-menu></main-menu>
    @yield('content')
</div>
<script src="{{ mix('js/portfolio_app.js') }}"></script>
</body>
</html>
