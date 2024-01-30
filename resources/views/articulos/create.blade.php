@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h2>Crear Nuevo Registro</h2>
@stop

@section('content')
  
<form action="/articulos" method="POST">
    @csrf
<div class="mb-3">
    <label for="" class="form-label">código</label>
    <input type="text" class="form-control" id="codigo" name="codigo" tabindex="1">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" tabindex="2">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">cantidad</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">precio</label>
    <input type="number" class="form-control" id="precio" name="precio" tabindex="4">
  </div>

  <a href="\articulos"  class="btn btn-primary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">guardar</button>
  

</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop