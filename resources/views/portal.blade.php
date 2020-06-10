@extends('plantillas.plantilla')
@section('titulo')
    Yocoima
@endsection
@section('contenido')
    

        
        <div id="logo">
            <br>
            <h1>Yocoima</h1>
            <p>En la defensa de los animales, el medio ambiente y la justicia social.</p>
    </div> 
  
    </header><!-- end header -->
    </div>

 
 
<!-- hero area (the grey one with a slider -->
    <section id="hero" class="clearfix">    
    <!-- responsive FlexSlider image slideshow -->
    <div class="wrapper">
       <div class="row"> 
        <div class="grid_5">
            <h1>¿Quiénes somos?</h1>
            <br>
            <p>... el nombre Yocoima, procedente de las antiguas tribus Guayanas, tiene el significado de "Protector de las tierras". <br><br>
            Nos podemos describir como una organización sin ánimo de lucro cuyo único fin es acercar a la población a la naturaleza y al cuidado de este, nuestro planeta, y la vida que habita en él.<br><br>
             A día de hoy la filosofía de las personas sobre el planeta es totalmente distinta a la que debería de ser, ¿nos ayudas a cambiarla?
             <!-- o ¿acaso el simple hecho de guardar tu basura para posteriormente tirarla en su lugar es tan difícil? Sí, sí que lo es, pues como la realidad es la que es, es más fácil decir que la culpa es de las industrias y no cambiar la mentalidad de uno propio y aportar lo que uno pueda, y así, es el bucle en el que se encuentra la sociedad.-->

            </p>
            <p><a align='center' href="{{route('somos')}}" class="buttonlink">Seguir leyendo</a></p>
        </div>
        <div class="grid_7 rightfloat">
              <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <img src="images/basic-pic4.jpg" />
                        <p class="flex-caption">Osos polares.</p>
                    </li>


                      <li>
                          <img src="images/basic-pic2.jpg" /></a>
                          <p class="flex-caption">Jiuzhaigou.</p>
                      </li>
                      <li>
                        <img src="images/basic-pic5.jpg" />
                        <p class="flex-caption">Caballos salvajes.</p>
                    </li>
                      <li>
                          <img src="images/basic-pic3.jpg" />
                          <p class="flex-caption"> Cataratas Victoria, Zambia/Zimbabue</p>
                      </li>
                      <li>
                        <img src="images/basic-pic1.jpg" />
                        <p class="flex-caption">África, La sabana.</p>
                    </li>


                    <li>
                        <img src="images/6.jpg" />
                        <p class="flex-caption">Monte Roraima, Venezuela.</p>
                    </li>
                    <li>
                        <img src="images/7.jpg" />
                        <p class="flex-caption">Olas del desierto, EE.UU.</p>
                    </li>
                    <li>
                        <img src="images/8-Zhangjiajie.jpg" />
                        <p class="flex-caption">Zhangjiajie, China.</p>
                    </li>
                  </ul>
                </div><!-- FlexSlider -->
              </div><!-- end grid_7 -->
        </div><!-- end row -->
       </div><!-- end wrapper -->
    </section><!-- end hero area -->





<!-- main content area -->   
<div id="main" class="wrapper">
    
    
<!-- content area -->    
	<section id="content" class="wide-content">
      <div class="row">	
        <div class="grid_4">
        	<h1 class="first-header">¿Qué hacemos?</h1>
            <img src="images/ayuda.jpg" />
            <p><br>Para llevar a cabo nuestra labor en la sociedad es necesario de la ayuda de las personas, para ello realizamos actividades y quedadas dependiendo del momento y de la situación actual de la sociedad para realizar unas u otras.<br>
            ¿Estás interesado?</p>
            <br>
            <br>
            <p align='center'><a class="buttonlink" href="{{route('hacemos')}}">Acceder</a></p>

        </div>
        
        <div class="grid_4">
        	<h1 class="first-header">Open Data</h1>
            <img src="images/aemet.jpg" />
            <p><br><br>¿Quieres acceder y obtener datos procedentes directamente de entidades como la NASA o AEMET?<br>
               <br><br>Podrás acceder e interactuar con datos tanto a nivel nacional por parte de AEMET como a nivel del planeta cuyos datos son obtenidos de las fuentes de datos abiertas de la NASA.<br>
            </p>
            <p align='center'><a class="buttonlink" href="{{route('info')}}">Acceder</a></p>
        </div>
        
        <div class="grid_4">
        	<h1 class="first-header">Colabora</h1>
            <img src="images/colabora.jpg" />
            <p><br>¿Deseas realmente colaborar? ¡Perfecto!<br>
            Si deseas colaborar ayudando en nuestras actividades no dudes y registrate<br>
            <p align='center'><a class="buttonlink" href="{{route('registro')}}">Regístrate</a></p>

            Si no dispones de tiempo pero quieres aportar de manera económica, ¡dona!
            <p align='center'><a class="buttonlink" href="{{route('colabora')}}">Colabora</a></p>


        </p>
        </div>
	  </div><!-- end row -->
	</section><!-- end content area -->   
      
      

      
  </div><!-- #end div #main .wrapper -->


<!-- footer area -->    
<footer>
	<div id="colophon" class="wrapper clearfix">
    	Yocoima
    </div>
    
<div id="attribution" class="wrapper clearfix" style="color:#666; font-size:11px;">   Proyecto de Enrique Cazorla, alumno de 2º DAW del I.E.S Al-Ándalus.
</div>
    
</footer>




@endsection