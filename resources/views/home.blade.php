@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido al portal de Yocoima <b>{{Auth::user()->name}} </b>!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <p>Si nos encontramos en este punto podemos decir que has pasado a formar parte de nuestra gran familia por lo que además de la bienvenida te doy las gracias por ello en nombre de todos. Deseo de corazón que no te desilusionemos y juntos podamos llegar a hacer grandes cosas aportando nuestro grano de arena. </p>
                    <img src="images/portalgreen.jpeg" class="img-fluid">
                    <p><a class="buttonlink" href="{{route('actividades')}}">Actividades</a><a class="buttonlink" href="{{route('apadrina')}}">Apadrina</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
