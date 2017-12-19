@extends('layouts.manage')
@section('content')
<h1 class="title is-1">Dashboard</h1>
<div class="columns">
	<div class="column is-one-third">
		<div class="card">
			<div class="card-image">
				<figure class="image is-4by3" style="background-color: '#000'">
					<img src="{{ asset('images/qr-logo.png') }}" alt="Placeholder image">
				</figure>
			</div>
			<footer class="card-footer">
				<a href="{{ asset('apk/mag-qr.apk') }}" class="card-footer-item">Download APK</a>
			</footer>
		</div>
	</div>
</div>
@stop