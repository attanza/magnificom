@extends('layouts.manage')
@section('content')
<nav class="breadcrumb has-arrow-separator" aria-label="breadcrumbs">
	<ul>
		<li><a href="{{ url('/manage/dashboard') }}">
			<span class="icon is-small m-b-5"><i class="fa fa-dashboard"></i></span> Dashboard</a>
		</li>
		<li>
			<a href="{{ route('users.index') }}"><span class="icon is-small m-b-5"><i class="fa fa-user"></i></span>User List</a>
		</li>
		<li class="is-active">
			<a aria-current="page">{{$user->name}}</a>
		</li>
	</ul>
</nav>
<div class="columns">
	<div class="column">
		<div class="card">
			<div class="card-image">
				<figure class="image">
					<img src="{{$user->photo}}">
				</figure>
			</div>
			<div class="card-image">
				<figure class="image has-text-centered">
					{!! QrCode::size(200)->generate($user->email); !!}
				</figure>
			</div>
			<div class="card-content">
			</div>
		</div>
	</div>
	<div class="column">
		<div class="card">
			<header class="card-header">
				<p class="card-header-title">
					User Detail
				</p>
			</header>
			<div class="card-content">
				<div class="content">
					<table class="table">
						<tbody>
							<tr>
								<td>Name</td>
								<td>{{$user->name}}</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>{{$user->email}}</td>
							</tr>
							<tr>
								<td>Role</td>
								<td>{{$user->getRole()}}</td>
							</tr>
							<tr>
								<td>Active</td>
								<td>
									@if ($user->is_active)
									<i class="fa fa-check"></i>
									@else
									<i class="fa fa-times"></i>
									@endif
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<footer class="card-footer">
				<a href="{{ route('users.edit', $user->id) }}" class="card-footer-item">Edit</a>
				<a href="#" class="card-footer-item">Generate QR Code</a>
			</footer>
		</div>
	</div>
</div>
@stop
@section('scripts')
@stop