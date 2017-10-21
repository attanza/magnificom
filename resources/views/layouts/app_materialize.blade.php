<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Dani & Maya Wedding Invitation</title>
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
<link href="{{asset('css/vuetify.min.css')}}" rel="stylesheet">
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
{{-- @include('layouts.nav') --}}
<vue-menu></vue-menu>
@yield('content')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
