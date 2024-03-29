@extends('layouts.layout')
@section('contenido')
<form action="{{route('users.store')}}" method="post">
    @csrf
<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="password">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="type">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

@endsection
