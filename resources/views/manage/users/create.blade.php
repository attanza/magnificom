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
      <a aria-current="page"><span class="icon is-small"><i class="fa fa-plus"></i></span>Create</a>
    </li>
  </ul>
</nav>
<div class="card">
  <header class="card-header">
    <p class="card-header-title">Create new user</p>
  </header>
  <div class="card-content">
    <form class="login-form" method="POST" enctype="multipart/form-data"
    action="{{ route('users.store') }}">
      {{ csrf_field() }}
      @include('manage.users.userForm')
    </form>
  </div>
</div>
@stop
@section('scripts')
<script src="{{ asset('js/sortable.js') }}"></script>
@stop