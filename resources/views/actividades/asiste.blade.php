

@extends('plantillas.plantilla2')
@section('titulo')Actividades
@endsection
@section('cabecera')
ACTIVIDADES
@endsection
@section('contenido')
<div class="pos-f-t">

@if ($texto=Session::get('mensaje'))
<p class="alert alert-success my-3">{{$texto}}</p>
    
@endif
<div class='container mt-3'>
    
    
    <h3 ALIGN='CENTER'>PRÓXIMAS ACTIVIDADES A LAS QUE ASISTES</h3><br><br>

    <div class="table-responsive">
      <table class="table">
          <thead>
              <tr class="table-active">
                  <th scope="col">Titulo</th>
                  <th scope="col">Fecha (AA-MM-DD)</th>
                  <th scope="col">Más info</th>
    
              </tr>
          </thead>
          <tbody>
              
              @foreach ($actii as $a)
                @foreach($a->usuarios as $asistente)
                  @if($asistente->id==Auth::user()->id)   
                     
               
    
              <tr class="table-success">
    
                  <td class="align-middle">{{$a->titulo}}</td>
                  <td class="align-middle">{{$a->fecha}}</td>
                  <th scope="row" class="align-middle">
                      <a href="{{route('show', $a)}}" class="btn btn-primary">Detalles</a>
                  </th>
    
              </tr>
              @endif
              @endforeach
              @endforeach
          </tbody>
      </table>
    </div>
    


    </div>
      @endsection