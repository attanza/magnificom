@extends('layouts.app')

@section('content')
  <div class="parallax-container">
    <div class="parallax"><img src="{{asset('images/electric2.jpg')}}"></div>
    <div class="magnificom-text">
      <h1>Magnificom</h1>
    </div>
  </div>
@endsection
@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.parallax').parallax();
    });
  </script>
@endsection
@section('styles')
  <style>
    .parallax-container {
      height: 100vh;
    }
    .magnificom-text {
      text-align: center;
      color: #fff;
      position: absolute;
      left: 50%;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
  </style>
@endsection
