@extends('layouts.layout')
@section('contenido')
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Tipo</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      @if($user->type == null)
      <td>Sin tipo</td>
      @else
      <td>{{$user->type}}</td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
