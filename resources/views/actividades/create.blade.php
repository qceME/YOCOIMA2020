@extends('plantillas.plantilla2')
@section('titulo')Actividades
@endsection
@section('cabecera')
Editar actividad
@endsection
@section('contenido')

@if ($errors->any())
  <div class="alert-danger alert">
      <ul>
        @foreach ($errors->all() as $e)
          <li>{{$e}}</li>
        @endforeach
      </ul>
  </div>
@endif
<div class='container mt-5'>
    <h2 align='center'>Crear actividad</h2><br><br>

<form method='POST' action="{{route('store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
      <div class="col">
        <label for="titulo" class="col-sm-2 col-form-label col-form-label-lg">TITULO</label>
      <input type="text" class="form-control" name='titulo' required>
      </div>
      <div class="col">
        <label for="fecha" class="col-sm-2 col-form-label col-form-label-lg">FECHA</label>

        <input type="date" class="form-control" name='fecha' required>


    </div>


      </div>
      <div class="form-row mt-3">
        <div class="col">
        <label for="descripcion" class="col-sm-2 col-form-label col-form-label-lg">DESCRIPCIÓN</label>

          <input type="text" class="form-control" name='descripcion'>
        </div>
</div>
<BR>



      <div class="form-row mt-3">
          <br>
          <br>
        <div class="col">
            <p align='center'> <br><br>
            <input type='submit' value='Crear' class='btn btn-success mr-3'>
           
            <a href={{route('admin')}} class='btn btn-info'>Volver</a>
        </p>
        </div>
    </div>

  </form>
</div>
@endsection