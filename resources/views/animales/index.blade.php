@extends('plantillas.plantilla3')
@section('titulo')Animales
@endsection
@section('cabecera')
ACTIVIDADES
@endsection
@section('contenido')

@if ($texto=Session::get('mensaje'))
<p class="alert alert-success my-3">{{$texto}}</p>
    
@endif
<div class="text-center">
    <a href="{{route('home')}}">
    <img src="{{asset('/images/catalogo/cata.png')}}"  class="img-fluid">
    </a>
    <div class="alert alert-secondary" role="alert">
        No dudes en consultar en admin@gmail.com
      </div>
<div class="table-responsive" class="text-center">
    <table class="table" >
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Especie</th>
                <th scope="col">Edad</th>
                <th scope="col" > Observaciones</th>
                <th scope="col"> Imagen</th>

            </tr>

        </thead>

        <tbody>
            

        
            @foreach ($animales as $a)

            <tr >

                <td class="align-middle"><b>{{$a->name}}</b>
                    </td>
                    <td class="align-middle">{{$a->especie}}</td>
                <td class="align-middle">{{$a->edad}}</td>
                    <td class="align-middle">{{$a->observaciones}}</td>
                   <td> <img src="{{asset($a->foto)}}" width="220px" height="160px"></td>


            
    

            @endforeach
            </tr>
        </tbody>
    </table>
  </div>
  <div class="text-center" float='right'>
<p align='center'>{{$animales->appends(Request::except('page'))->links()}}
</p>

</div>
@endsection