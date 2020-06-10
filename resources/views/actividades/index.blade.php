@extends('plantillas.plantilla2')
@section('titulo')Actividades
@endsection
@section('cabecera')
ACTIVIDADES
@endsection
@section('contenido')

@if ($texto=Session::get('mensaje'))
<p class="alert alert-success my-3">{{$texto}}</p>
    
@endif
<div class='container mt-3'>
    
    
    <h3 ALIGN='CENTER'>PRÓXIMAS ACTIVIDADES ACTIVAS ({{$activas}})</h3><br><br>

    <form name="search" method="get" action="{{route('actividades')}}" class="form-inline float-right">
       
        <i class="fa fa-search fa-2x ml-2 mr-2" aria-hidden="true"></i>
        

        <input type="text" name="palabra" class='form-control mr-2'>

        <input type="submit" value="Buscar" class="btn btn-info ml-2">
        </form><br><br>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Fecha (AA-MM-DD)</th>
                    <th scope="col">Más info</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($acti as $a)

                <tr >

                    <td class="align-middle">{{$a->titulo}}</td>
                    <td class="align-middle">{{$a->fecha}}</td>
                    <th scope="row" class="align-middle">
                        <a href="{{route('show', $a)}}" class="btn btn-primary">Detalles</a>
                    </th>

                </tr>
        

                @endforeach
            </tbody>
        </table>
      </div>

    {{$acti->appends(Request::except('page'))->links()}}

    </div>
      @endsection