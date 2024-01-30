@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h2>Panel Principal</h2>
@stop

@section('content')


   <a href="articulos\create" class="btn btn-primary mb-3" >crear un nuevo registro</a>

<table id="articulos" class="table table-striped ">
  <thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">código</th>
    <th scope="col">descripcion</th>
    <th scope="col">cantidad</th>
    <th scope="col">precio</th>
    <th scope="col">acciones</th>
</tr>
  </thead>
  <tbody>
    @foreach($articulos as $articulo)
        <tr>
            <th>{{$articulo->id}}</th>
            <th>{{$articulo->codigo}}</th>
            <th>{{$articulo->descripcion}}</th>
            <th>{{$articulo->cantidad}}</th>
            <th>{{$articulo->precio}}</th>
            <th>
                <form action="{{route ('articulos.destroy',$articulo->id)}} " method="POST">
                <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-primary">Editar</a>
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </th>




        </tr>
    @endforeach
  </tbody>  

</table>

  



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" >
@stop

@section('js')
<script src = "https://code.jquery.com/jquery-3.7.0.js"></script>
<script src = "https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src = "https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>new DataTable('#articulos');</script>

@stop