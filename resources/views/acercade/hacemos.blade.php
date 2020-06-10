@extends('plantillas.plantilla')
@section('titulo')
    ¿Quienes somos?
@endsection
@section('contenido')

</header>
</div>


<div class="wrapperaemet" align='center' id="main"> 
<section >

<blockquote class="blockquote">
    <p ><i>Imagina un mundo donde los bosques florecen y los océanos están llenos de vida. Donde la energía es tan limpia como un arroyo de montaña. Donde todo el mundo tiene seguridad, dignidad y alegría. No podemos construir este futuro entre pocas personas, pero podemos construirlo contigo..</i></p>
    <foot class="blockquote-footer">Cita de <cite title="Source Title">Greenpeace</cite></foot>
  </blockquote>


  <div class="card">
    <h2 class="card-header">La gran meta</h2>
    <div class="card-body">
      <p class="card-title">En una frase sería “cambiar los hábitos de la sociedad que perjudican tanto a las personas, los animales y el planeta para lograr una convivencia respetuosa con la naturaleza y todos los que habitamos en ella".</p>
      <p class="card-text">¿Te parece una fantasía? No te preocupes, tiempo al tiempo, pero... ¿Quieres ayudarnos?
          En nuestra organización, los socios quedamos en nuestros ratos libres en los que realizamos diversas actividades tanto humanitarias como naturales, ¿quieres saber más? Accede y regístrate sin coste alguno.
        <br>

        <br>
    </p>
    <p><a align='center' href="{{route('registro')}}" class="buttonlink">Registro</a></p>
    <p align='center'>o</p>
    <p><a align='center' href="{{route('colabora')}}" class="buttonlink">Colabora</a></p>


 
    </div>
  </div>


</section>
</div>



<footer>
	<div id="colophon" class="wrapper clearfix">
    	Yocoima
    </div>
    
<div id="attribution" class="wrapper clearfix" style="color:#666; font-size:11px;">   Proyecto de Enrique Cazorla, alumno de 2º DAW del I.E.S Al-Ándalus.
</div>
    
</footer>
</div>
    
    @endsection
    