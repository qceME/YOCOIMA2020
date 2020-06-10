@extends('plantillas.plantilla')
@section('titulo')
    Info
@endsection
@section('contenido')


</header><!-- end header -->
</div>
<div id="page-header">
	<br>
    <h1>Open Data</h1> 
    <p></p>
    <a href="{{route('nasa')}}" class="buttonlink">NASA</a>    <a href="{{route('aemet')}}" class="buttonlink">AEMET</a>
</div> 



<div class="wrapperaemet" align='center' id="main"> 
    
    <!-- content area -->    
        <section>
        
      
            <div class="card">
                <h2 class="card-header">¿Sabías qué? </h2>
                <div class="card-body">
                    <br>
                  <p class="card-title"></p>
                  <p class="card-text">
                      <ul>
                          <li>El mes de enero de 2020 ha sido el más cálido en la Tierra, tanto en la superficie terrestre como en los océanos, desde que hay registros, que comenzaron a realizarse en 1880.<br><br>
                         <img src="images/graf2020.png" />
                          </li><br>
                          <li>¿Y 2019? El año 2019 fue el segundo año más cálido registrado después de 2016, según el análisis de los principales datos internacionales recopilados por la Organización Meteorológica Mundial</li><br>
                          <li>Petteri Taalas, secretario general de la Organización Meteorológica, afirmó que "desafortunadamente” debemos esperar ver muchos más eventos de clima extremo a lo largo de 2020 y en las próximas décadas, impulsados por esos niveles récord de gases de efecto invernadero que atrapan el calor en la atmósfera.</li><br>
                          <li>Además, ¿sabías que más del 90% del exceso de calor se almacena en los océanos ?<br><br>
                         <img src="images/coral.png" />
                         <br><br>
                          </li>
                      </ul>
                      <p>Las temperaturas son solo una parte de la historia, señala la Organización. El año y la década pasados ​​se caracterizaron por la retirada de hielo en los casquetes polares y glaciares, la subida récord del nivel del mar, el aumento del calor y la acidificación de los océanos y un clima extremo.<br><br>

                        Todos esos acontecimientos se han combinado para impactar notablemente en la salud y el bienestar de los humanos y el medio ambiente, como destaca la Declaración Provisional de la Organización Meteorológica sobre el Estado del Clima Global en 2019, que se presentó en la Conferencia de la ONU sobre el Cambio Climático, COP25, en Madrid. La declaración completa se emitirá en marzo de 2020.<br><br>
                        
                        “El año 2020 comenzó donde terminó 2019, con eventos climáticos de alto impacto. Australia tuvo su año más caluroso y seco , preparando el escenario para los incendios forestales masivos que están siendo tan devastadores para las personas y las propiedades, la vida silvestre, los ecosistemas y el medio ambiente ", destacó Taalas.</p>
                  
                 
</p>
                </div>
                <br>
                <br>
                <br>
            </div>
                
            <div class="card">
                <h2 class="card-header">¿Conocías el efecto Albedo de almería? </h2>
                <div class="card-body">
                    <br>
                         <img src="images/albedo.jpg" />
                         <p class="card-title"></p>
                  <p class="card-text">Este fenómeno fue estudiado por un grupo de investigadores de la Universidad de Almería. En dicho estudio se llegó a la conclusión de que, desde los años 80 aproximadamente, la temperatura descendió una media de 0,3 grados por década en comparación al resto del territorio español, en el que se registra un incremento de la temperatura media en 0,5 grados por década.<br><br>

                    Asimismo, la investigación también se encaminó en medir el nivel del efecto albedo en la zona y se pudo determinar que la reflectividad de luz registró, desde 1983, un aumento del 9%. En otras palabras, la radiación solar desviada en Almería es un 9% mayor al resto de España, lo que contribuye a un menor gasto energético en sistemas de climatización de espacios, tanto en domicilios como en invernaderos.<br><br>
                    
                    BrioAgro lleva controlando el microclima en los invernaderos de Almería desde el año 2014, consiguiendo que la toma de decisiones de los agricultores, basados en los datos obtenidos por BrioAgro, genere ahorro de agua, energía y fertilizantes así como un incremento de su productividad.</p>
                </div>
            </div>

              



</div>
</div>
  
  

                


      
      

   
  </div><!-- #end div #main .wrapper -->
    


  <footer>
	<div id="colophon" class="wrapper clearfix">
    	Yocoima
    </div>
    
<div id="attribution" class="wrapper clearfix" style="color:#666; font-size:11px;">   Proyecto de Enrique Cazorla, alumno de 2º DAW del I.E.S Al-Ándalus.
</div>
    
</footer>


@endsection

