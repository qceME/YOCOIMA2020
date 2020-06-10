@extends('plantillas.plantilla2')
@section('titulo')Actividades
@endsection
@section('cabecera')
HISTORIAL ACTIVIDADES
@endsection
@section('contenido')
@if ($texto=Session::get('mensaje'))
<p class="alert alert-success my-3">{{$texto}}</p>
    
@endif

<div class='container mt-3'>
    
    
    <h3 ALIGN='CENTER'>PANEL ADMIN ACTIVIDADES </h3><br><br>


    <a href="{{route('create')}}" class="btn btn-success mb-2">Añadir Actividad</a>
    <form name="search" method="get" action="{{route('admin')}}" class="form-inline float-right">
       
        <select name='activas' class='form-control mr-2'>
            <option value='%'>Todas</option>
            <option value='activas'>Activas</option>
            <option value='pasadas'>Pasadas</option>

        </select>
        <i class="fa fa-search fa-2x ml-2 mr-2" aria-hidden="true"></i>
        

        <input type="text" name="palabra" class='form-control mr-2'>

        <input type="submit" value="Buscar" class="btn btn-info ml-2">
        </form><br>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">ID</th>
                    <th scope="col">Fecha (AA-MM-DD)</th>
                    <th scope="col">Más info</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($acti as $a)
                <tr>

                    <td class="align-middle">{{$a->titulo}}</td>
                    <td class="align-middle">{{$a->id}}</td>
                    <td class="align-middle">{{$a->fecha}}</td>
                    <th scope="row" class="align-middle">
                      <a href="{{route('showadmin', $a)}}" class="btn btn-primary">Detalles</a>
                  </th>
                  <td class="align-middle">
                    <a href="{{route('edit', $a)}}" class="btn btn-warning mr-3 float-left">Editar</a>
                    <form action="{{route('destroy', $a)}}" method="POST" class="float-left">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-danger" onclick="return confirm('¿Borrar Actividad?')" value="Eliminar">
                    </form>
                </td>

                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    {{$acti->appends(Request::except('page'))->links()}}

    </div>
      @endsection