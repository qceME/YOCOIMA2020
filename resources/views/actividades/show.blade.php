@extends('plantillas.plantilla2')
@section('titulo')
Actividades
@endsection
@section('cabecera')
ACTIVIDADES
@endsection
@section('contenido')
<br>
<h1 align='center'>DETALLES DE LA ACTIVIDAD </h1>

<span class="clearfix"></span>
<div class="card text-black mt-5 mx-auto" style="max-width: 48rem;">
    <div class="card-header text-center"><b>{{($actividad->titulo)}}</b></div>
    <div class="card-body" style="font-size: 1.1em">
        <p class="card-text">
            <P><B>ID:</B> {{$actividad->id}}</P>
        <p><b>Fecha:</b> {{$actividad->fecha}}</p>
        <p><b>Descripcion</b>  {{$actividad->descripcion}}</p>
        </p>
        <p><b>Asistentes ({{$cont}}):</b></p>
<ul>
    <select class="form-control">

        @foreach ($actividad->usuarios as $asistente)
        
        
        <option>{{$asistente->email}} ({{$asistente->name}})</option>
    

        
        @endforeach
    </select>

    </ul><br>
    
    @if ($actividad->fecha < now())
    <p align='center' class="alert alert-danger my-3">Hola, {{Auth::user()->name}} , esta actividad se realizó el día {{$actividad->fecha}}</p>

    @elseif ($asiste==0)
        
 
    <form action="{{route('unirse')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="actividad_id" value="{{$actividad->id}}">
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

        <p align='center'>Hola, {{Auth::user()->name}} , ¿quieres participar en esta actividad?<br><br>
        <input  align='center' type="submit" value="UNIRME" class="alert alert-success"></p>
    @else
    <p align='center' class="alert alert-success my-3">Hola, {{Auth::user()->name}} , recuerda que asistirás a esta actividad el día {{$actividad->fecha}}</p>

        
    @endif

        

    <a href="{{route('actividades')}}" class="float-right btn btn-link">Volver</a>

        


    </form>
    </div>

</div>
@endsection