@extends('layouts.manage')
@section('content')
<nav class="breadcrumb has-arrow-separator" aria-label="breadcrumbs">
	<ul>
		<li><a href="{{ url('/manage/dashboard') }}">
			<span class="icon is-small m-b-5"><i class="fa fa-dashboard"></i></span> Dashboard</a>
		</li>
		<li class="is-active">
			<a aria-current="page"><span class="icon is-small m-b-5"><i class="fa fa-user"></i></span>User List</a>
		</li>
	</ul>
</nav>
<div class="columns is-mobile">
	<div class="column">
		<h4 class="title is-4">User List</h4>
	</div>
	<div class="column">
		<a href="{{ route('users.create') }}" class="button is-primary is-pulled-right">Create User</a>
	</div>
</div>
<div style="overflow-x:auto;">
	<table class="table is-bordered is-striped is-narrow is-fullwidth sortable">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Level</th>
				<th>Active</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->roles()->first()->name}}</td>
				<td>
					@if ($user->is_active)
					<i class="fa fa-check"></i>
					@else
					<i class="fa fa-times"></i>
					@endif
				</td>
				<td><a href="{{ route('users.show',$user->id) }}" class="button is-primary is-small">
				<i class="fa fa-eye"></i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@stop
@section('scripts')
<script src="{{ asset('js/sortable.js') }}"></script>
@stop