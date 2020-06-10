@extends('plantillas.plantilla')
@section('titulo')
    Yocoima
@endsection
@section('contenido')


</header><!-- end header -->
</div>
<div id="page-header">
	<br>
    <h1>NASA OpenData</h1> 
    <p>Los siguientes datos proceden de las APIs Open Data de la NASA, la Administración Nacional de la Aeronáutica y del Espacio.<br> A continuación se mostrarán una serie de valores procedentes de distintas APIs a nivel de planeta en los que se incorpora una herramienta de traducción para aquellos que lo necesiten.</p>
</div> 

<br>
<br>
<br>
<!-- main content area -->   
<div class="wrapperaemet" align='center' id="main"> 
    
<!-- content area -->    
	<section>
    
  
        <div class="card">
            <h2 class="card-header">APOD- Astronomy Picture of the Day </h2>
           
            <div class="card-body">
                <h5 class="card-title"><i>"APOD es un sitio web mantenido por la NASA y por la Universidad Tecnológica de Míchigan en el que cada día se muestra una imagen diferente del nuestro universo, con una corta explicación escrita por un astrónomo profesional, el tema de hoy es..."</i></h5>
                <br>
                        <p id="explanation" class="card-title"> <script>
                
            
                                    var settings = {
                                    "async": true,
                                    "crossDomain": true,
                                    "url": "https://api.nasa.gov/planetary/apod?api_key=lSujOc9GB8TFnUji1ywF37eBdYiAbfe7zsOjb2OD",
                                    "method": "GET",
                                    "headers": {
                                        "cache-control": "no-cache"
                                                }
                                            }

                                            $.ajax(settings).done(function (response) {
                                            document.getElementById('explanation').innerHTML=response.explanation;
                                            });
            
                                    
                                    
            
            </script>   
            <div id="google_translate_element"></div>
            
        </p>
              <p class="card-text">
                <img id="pic" src="" width="100%">
                <script>

                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "https://api.nasa.gov/planetary/apod?api_key=lSujOc9GB8TFnUji1ywF37eBdYiAbfe7zsOjb2OD",
                    "method": "GET",
                    "headers": {
                        "cache-control": "no-cache"
                                }
                            }
                            $.ajax(settings).done(function (response) {
                                //alert(response.datos);
                                //window.open(response.url,"", "width=400, height=400")
                                document.getElementById("pic").src = response.hdurl;
                                //console.log(response);
                            });
                
                    
            
        </script>
                <h6>
                <input type="button" id="apod"  class="btn btn-link ml-2" value="Astronomy Picture of the Day " /><br>
                (si no visualiza la imagen click en el enlace)</h6>

              </p>
                


            </div>
          </div>

          <script>
              urlimage="https://api.nasa.gov/planetary/apod?"
             document.getElementById("apod").onclick = function() {llamadanasa(urlimage)};


          </script>
 


<br>
<br>
<br>


</section>
      
      

   
  </div>
  
<div id="main" class="wrapper"> 
        <section id="content" class="wide-content">
          <div class="row">	
            <div class="grid_4">
                <h1 class="first-header">API EPIC</h1>
                <img src="images/EPIC.PNG" />
                <br>
                <br>
                <p>La API EPIC proporciona información sobre las imágenes diarias recopiladas por el instrumento de cámara de imagen policromática terrestre (EPIC) de DSCOVR. Con una posición única en el punto Tierra-Sol de Lagrange, EPIC proporciona imágenes de disco completas de la Tierra y captura perspectivas únicas de ciertos eventos astronómicos como tránsitos lunares utilizando un detector CCD (dispositivo acoplado de carga) de 2048x2048 píxeles acoplado a un telescopio Cassegrain de 30 cm de apertura .</p>
                <p align='center'><a class="buttonlink" href="https://epic.gsfc.nasa.gov/">Acceder a EPIC</a></p>
            </div>
            
            <div class="grid_4">
                <h1 class="first-header">API Geomagnetic Storm </h1>
                <img src="images/geomag.jpg" />
                <bR>
                <p><br>Las tormentas solares, en palabras de la NASA, son capaces de interrumpir redes de energía, comunicaciones y GPS y provocar deslumbrantes auroras.

                    Si tuviéramos hoy una tormenta parecida a la que tuvo lugar en 1859, la vida se paralizaría.<br><br>
                    
                    
                    Las alteraciones geomagnéticas fueron tan fuertes que los operadores de telégrafos de Estados Unidos informaron de chispas que saltaron en sus equipos, algunas suficientemente fuertes para prender fuego.</p>
                <p align='center'><a class="buttonlink" href="https://kauai.ccmc.gsfc.nasa.gov/DONKI/search/">Acceder a DONKI/GST</a></p>


                   
            </div>
            
            <div class="grid_4">
                <h1 class="first-header">API Exoplanet</h1>
                <img src="images/exo.png" />
                <br>
                <p><br>Dice la página oficial:<br> <br>La API Exoplanet Archive permite el acceso programático a la base de datos Exoplanet Archive de la NASA. Esta API contiene un montón de opciones, así que para comenzar, visite la página para obtener materiales introductorios. Para ver qué datos están disponibles en esta API, visite <a href='https://exoplanetarchive.ipac.caltech.edu/docs/data.html'>aquí</a> y también asegúrese de consultar las mejores prácticas y la solución de problemas en caso de que se atasque. ¡Feliz caza del planeta! </p>
                <p align='center'><a class="buttonlink" href="https://exoplanetarchive.ipac.caltech.edu/index.html">Acceder a Exoplanet</a></p>

                
            </div>
          </div>
        </section>  
      </div>

      <div class="wrapperaemet" align='center' id="main"> 
    
        <!-- content area -->    
            <section>
      <div class="card mb-3">
        <img src="images/fuego.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">API EONET</h5>
          <p class="card-text">  El Observador de eventos naturales del Observatorio de la Tierra (EONET) es un prototipo de servicio web cuyo objetivo es: proporcionar una fuente de metadatos de eventos naturales actualizados continuamente; brindar un servicio que vincule esos eventos naturales con fuentes de imágenes habilitadas para servicios web relacionadas temáticamente. Una demostración: </p>
          <div text-align='center'>

            

                
                <form name="eonet" method="get" action="" 
                  onSubmit="eoneet(); return false">
                
                    <input class="form-control" type="number" value='1' id="dias" min="1" pattern="^[0-9]+"/><br>
                    <input type="submit" class="btn btn-info ml-2" id='enviar' value="Obtener"/><br><br>
                    
                    <i class="fa fa-search mr-2" aria-hidden="true"> Indica el número días desde hoy hacia atrás de los que deseas obtener los eventos</i>

                   
     
                
            </form>
        </div>


            
          <script>

                    
                    function eoneet(){
                        var dias = document.eonet.dias.value;
                        document.getElementById("lista").style.display='';


                $( document ).ready(function() {
                    $.getJSON( "https://eonet.sci.gsfc.nasa.gov/api/v3/events", {
                        status: "open",
                        limit: dias
                    })
                    .done(function( data ) {
                        $.each( data.events, function( key, event ) {
                            //console.log(event)
                            $( "#lista" ).append(
                                "<div class='card text-black bg-white mb-3' style='max-width: 18rem;'><div class='card-header'>"+event.geometry[0].date+"</div><div class='card-body'><h5 class='card-title'>"+event.title +"</h5><p class='card-text'><dt>" + event.id + "--> " +  ": " + "<a href='"+event.sources[0].url+"'>Más info</a>" +  "</dt></p></div>"
                            );
                        });
                    });
                });
            }           


        </script>
         <br>
         <br>
         <br>
        <div id="lista"></div>


        </div>
        <input type="button" class="btn btn-info ml-2" id='ocultar' value="Ocultar eventos"/>
        <script>

            document.getElementById("ocultar").onclick = function() {oculta2()};
            function oculta2(){
                document.getElementById("lista").style.display='none';
        
            }
               
        
                </script>
      </div>
      <div class="card">
        <img src="images/asteroid.jpg" class="card-img-top" alt="...">

        <div class="card-body">
          <h5 class="card-title">API NeoWs</h5>
          <p class="card-text">NeoWs (Near Web Object Web Service) es un servicio web RESTful para información de asteroides cercanos a la Tierra. Con NeoWs, un usuario puede: buscar asteroides en función de su fecha de aproximación más cercana a la Tierra, buscar un asteroide específico con su identificación de cuerpo pequeño JPL de la NASA, así como explorar el conjunto de datos general. He aquí una pequeña demostración: </p>


          <p>                            

            
            <div align='center'>

                <input type="button" class="btn btn-info ml-2" id='enviarplanet' value="Obtener"/><br>

                
                <i class="fa fa-search mr-2" aria-hidden="true"> Obtener la predicción del próximo mes</i>

                
                <br>
                <br>
                <br>
            </div>
        
    </p>
              <script>
                         document.getElementById("enviarplanet").onclick = function() {llamadanasaplanet()};
                        function llamadanasaplanet() {
                        document.getElementById("lista2").style.display='';

                         var settings = {
                    "url": "https://api.nasa.gov/neo/rest/v1/feed?start_date=&end_date=&api_key=lSujOc9GB8TFnUji1ywF37eBdYiAbfe7zsOjb2OD",
                            }
                            $.ajax(settings).done(function (response) {
                                console.log(response)
                                document.getElementById("lista2").innerHTML+="<h1>Número de asteroides: "+response.element_count+"</h1>";
                                //console.log(response);
                                //console.log('asteroides->'+response.element_count);
                                //var fechas=Object.keys(response.near_earth_objects).length;
            
                                for (let i in response.near_earth_objects) {
                                    document.getElementById("lista2").innerHTML+="<h1>"+i+"</h1><ul class='list-group list-group-flush'>";
                                        
                                        response.near_earth_objects[i].forEach( element => document.getElementById("lista2").innerHTML+="<li class='list-group-item'><b>Nombre</b> : "+element.name+'<br><b>Potencialmente peligroso: </b> '+element.is_potentially_hazardous_asteroid+'<br><a href='+element.nasa_jpl_url+'>Más info</a></li>');'</ul>'

                                    
                                    
                                    }
                            });
                        }

        </script>   
        <div id="lista2"></div>


            
        </div>
        <input type="button" class="btn btn-info ml-2" id='ocultar2' value="Ocultar lista"/>
        <script>

            document.getElementById("ocultar2").onclick = function() {oculta()};
            function oculta(){
                document.getElementById("lista2").style.display='none';
        
            }
               
        
                </script>
      </div>
    </section>  
</div>

</body>


<!-- footer area -->    
<footer>
	<div id="colophon" class="wrapper clearfix">
    	footer stuff
    </div>
    
<!--You can NOT remove this attribution statement from any page, unless you get the permission from prowebdesign.ro--><div id="attribution" class="wrapper clearfix" style="color:#666; font-size:11px;">Site built with <a href="http://www.prowebdesign.ro/simple-responsive-template/" target="_blank" title="Simple Responsive Template is a free software by www.prowebdesign.ro" style="color:#777;">Simple Responsive Template</a> by <a href="http://www.prowebdesign.ro/" target="_blank" title="www.prowebdesign.ro" style="color:#777;">Prowebdesign.ro</a></div><!--end attribution-->
    
</footer><!-- #end footer area --> 


@endsection
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
    </script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>