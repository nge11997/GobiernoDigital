@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de Edicion</h1>
@stop

@section('content')

<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label for="" class="form-label">código</label>
    <input type="text" class="form-control" id="codigo" name="codigo" value="{{$articulo->codigo}}"; tabindex="1">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$articulo->descripcion}}";  tabindex="2">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">cantidad</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{$articulo->cantidad}}";  tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">precio</label>
    <input type="number" class="form-control" id="precio" name="precio" value="{{$articulo->precio}}";  tabindex="4">
  </div>
  <a href="\articulos"  class="btn btn-primary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">guardar</button>

  <form>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
 
@stop