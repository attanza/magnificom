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
      <a aria-current="page"><span class="icon is-small"><i class="fa fa-pencil"></i></span>Edit</a>
    </li>
  </ul>
</nav>
<div class="card">
  <header class="card-header">
    <p class="card-header-title">Edit user</p>
  </header>
  <div class="card-content">
    <form class="login-form" method="POST" enctype="multipart/form-data"
    action="{{ route('users.update',$user->id) }}">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      @include('manage.users.userForm')

    </form>
  </div>
</div>
@stop
@section('scripts')
@stop