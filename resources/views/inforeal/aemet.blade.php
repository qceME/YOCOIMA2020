@extends('plantillas.plantilla')
@section('titulo')
    Info
@endsection
@section('contenido')


</header><!-- end header -->
</div>
<div id="page-header">
	<br>
    <h1>AEMET OpenData</h1> 
    <p>Los siguientes datos proceden de la API Open Data de Aemet, la Agencia Estatal de Meteorología de España. A continuación se mostrarán una serie de valores a nivel de España.</p>
</div> 

<br>
<br>

<!-- main content area -->   
<div class="wrapperaemet" align='center' id="main"> 
    
<!-- content area -->    
	<section>
    
  
        <div class="card">
            <h2 class="card-header">Probabilidad de incendios</h2>
            <div class="card-body">
                <br>
              <p class="card-title">A continuación tienes la opción de visualizar un mapa elaborado de niveles de riesgo estimado meteorológico de incendios forestales para el día y el área pasados por parámetro.</p>
              <p class="card-text">
                  <br>
                <table border="2">
                    <tr class="table-info">
                        <td align="center">
                            FECHA
                        </td>
                        <td align="center">
                            ZONA
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table border='0'>
                                <tr>
                                <td>1-></td>
                                <td >Mañana</td>
                                </tr>
                                <tr>
                                <td>2-></td>
                                <td >Pasado Mañana</td>
                                </tr>
                                <tr>
                                <td>3-></td>
                                <td >Dentro de 3 días   </td>
                                </tr>
                                </tbody>
                                </table>
                        </td>
                        <td>
                            <table border='0'>

                                <tr>
                                <td>p-></td>
                                <td>Península</td>
                                </tr>
                                <tr>
                                <td>b-></td>
                                <td>Baleares</td>
                                </tr>
                                <tr>
                                <td>c-></td>
                                <td>Canarias  </td>
                                </tr>
                                </tbody>
                                </table>
                        </td>
                    </tr>
                </table>
                <br>
                
                
<br>
<div text-align='center'>

                        <form name="incendios" method="get" action="" 
                          onSubmit="procesarr(); return false">
                        <i class="fa fa-search mr-2" aria-hidden="true"> Día</i>


                        <select name="dia" id="dia" class="form-control">
     <option value="1">1</option>
     <option value="2" >2</option>
     <option value="3" >3</option>


</select>
<br>


&nbsp;&nbsp;<i class="fa fa-search mr-2" aria-hidden="true"> Área</i>

<select name="area" id="area" class="form-control">
    <option value="p">p</option>
    <option value="b" >b</option>
    <option value="c" >c</option>


</select>
<br>
<input type="submit" class="btn btn-info ml-2" id='enviar' value="Obtener">
</form></div></p>
            </div>
          </div>


        
            


<script>

                        function procesarr() {

                        var area = document.incendios.area.value;
                        var dia = document.incendios.dia.value;
                        var settings = {
                        "async": true,
                        "crossDomain": true,
                        "url": "https://opendata.aemet.es/opendata/api/incendios/mapasriesgo/previsto/dia/"+dia+"/area/"+area+"/?api_key=eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJraWtlY20xOTk3QGdtYWlsLmNvbSIsImp0aSI6ImJkZDlmYWI1LThhYWYtNGY3OS1iZDJiLTJmZTZjODIwZTk4ZSIsImlzcyI6IkFFTUVUIiwiaWF0IjoxNTg3NzI1MzE2LCJ1c2VySWQiOiJiZGQ5ZmFiNS04YWFmLTRmNzktYmQyYi0yZmU2YzgyMGU5OGUiLCJyb2xlIjoiIn0.b_xwxJ9TFDjcRHXqP_H6-5OEKkddlg81pnR3KGxZ3Iw",
                        "method": "GET",
                        "headers": {
                            "cache-control": "no-cache"
                                    }
                                }
                                $.ajax(settings).done(function (response) {
                                    //alert(response.datos);
                                    window.open(response.datos,"", "width=400, height=400")
});    
                        } 
                

</script>   
<br>
<br>
<br>
<bR>
    <div class="card">
        <h2 class="card-header">Radiación UV</h2>
        <div class="card-body">
          <p class="card-title">Predicción de Índice de radiación UV máximo en condiciones de cielo despejado para el día indicado.</p>
          <p class="card-text"><table border='1'>
            <tr class="table-info">
            <th align="center"><i class="fa fa-search mr-2" aria-hidden="true"> </i>Día</th>
            <th align="center">Enlace</th>
            </tr>
            <tr>
            <td>Hoy</td>
            <td ><input type="button" id="radiacion"  class="btn btn-link ml-2" value="Obtener radiación" />
        </td>
            </tr>
            <tr>
            <td>Mañana</td>
            <td ><input type="button" id="radiacion1"  class="btn btn-link ml-2" value="Obtener radiación" />
            </td>
            </tr>
            <tr>
                <td>Pasado mañana</td>
                <td ><input type="button" id="radiacion2"  class="btn btn-link ml-2" value="Obtener radiación" />
                </td>
                </tr>
            <tr>
                <td>Dentro de 3 días</td>
                <td ><input type="button" id="radiacion3"  class="btn btn-link ml-2" value="Obtener radiación" />
                </td>
                </tr>
                <tr>
                    <td>Dentro de 4 días</td>
                    <td ><input type="button" id="radiacion4"  class="btn btn-link ml-2" value="Obtener radiación" />
                    </td>
                    </tr>
            </table>
        </p>
     
        </div>
      </div>



<script>
    urluvi= "https://opendata.aemet.es/opendata/api/prediccion/especifica/uvi/0/?"; 
    document.getElementById("radiacion").onclick = function() {procesar(urluvi)};

    urluvi1= "https://opendata.aemet.es/opendata/api/prediccion/especifica/uvi/1/?"; 
    document.getElementById("radiacion1").onclick = function() {procesar(urluvi1)};

    urluvi2= "https://opendata.aemet.es/opendata/api/prediccion/especifica/uvi/2/?"; 
    document.getElementById("radiacion2").onclick = function() {procesar(urluvi2)};

    urluvi3= "https://opendata.aemet.es/opendata/api/prediccion/especifica/uvi/3/?";
    document.getElementById("radiacion3").onclick = function() {procesar(urluvi3)};

    urluvi4= "https://opendata.aemet.es/opendata/api/prediccion/especifica/uvi/4/?"; 
    document.getElementById("radiacion4").onclick = function() {procesar(urluvi4)};


</script>  
<br>
<br>
<br>
<br>

<div class="card">
    <h2 class="card-header">Mapas y gráficos</h2>
    <div class="card-body">
        <h3 class="card-title"> Configuración de la presión en superficie usando isobaras</h3>

      <p class="card-title">El mapa de análisis presenta el estado de la atmósfera a la hora correspondiente y los fenómenos más relevantes observados en España   </p>
  
      <input type="button" id="isobaras"  class="btn btn-info ml-2" value="Obtener datos" />
    </div>

    <div class="card-body">
        <h3 class="card-title"> Vegetación</h3>

      <p class="card-title">Esta imagen se realiza con una combinación de los datos del canal visible y del infrarrojo cercano del satélite NOAA-19, que nos da una idea del desarrollo de la vegetación.  </p>
  
      <input type="button" id="veg"  class="btn btn-info ml-2" value="Obtener datos" />
    </div>

    <div class="card-body">
        <h3 class="card-title"> Temperatura del mar</h3>

      <p class="card-title">Imagen obtenida con una combinación de los datos de los canales infrarrojos del satélite NOAA-19, que nos da la temperatura de la superficie del mar. </p>
  
      <input type="button" id="mar"  class="btn btn-info ml-2" value="Obtener datos" />
    </div>


    
  </div>

    <br >         
    <br >         


    <script>

        urliso="https://opendata.aemet.es/opendata/api/mapasygraficos/analisis/?";
       
        document.getElementById("isobaras").onclick = function() {procesar(urliso)};

        urlveg="https://opendata.aemet.es/opendata/api/satelites/producto/nvdi/?";
       
       document.getElementById("veg").onclick = function() {procesar(urlveg)};

       urlmar="https://opendata.aemet.es/opendata/api/satelites/producto/sst/?";
       
       document.getElementById("mar").onclick = function() {procesar(urlmar)};       

    </script> 

<br>
<br>
<br>
<bR>

    <div class="card">
        <h2 class="card-header">Predicción marítima</h2>
        <div class="card-body">
            <p> Predicción para un periodo de 24 horas de las condiciones meteorológicas para la zona costera elegida.
            </p>
          <p class="card-text"><table border='1'>
            <tr class="table-info">
            <th align="center"><i class="fa fa-search mr-2" aria-hidden="true"> </i>Área Costera</th>
            <th align="center">Enlace</th>
            </tr>
            <tr>
            <td>Costa de Andalucía Occidental y Ceuta</td>
            <td ><input type="button" id="prediccion"  class="btn btn-link ml-2" value="Obtener predicción" />
        </td>
            </tr>
            <tr>
            <td>Costa de Andalucía Oriental y Melilla</td>
            <td ><input type="button" id="prediccion1"  class="btn btn-link ml-2" value="Obtener predicción" />
            </td>
            </tr>
            <tr>
                <td>Costa de Asturias, Cantabria y País Vasco</td>
                <td ><input type="button" id="prediccion2"  class="btn btn-link ml-2" value="Obtener predicción" />
                </td>
                </tr>
            <tr>
                <td>Costa de Cataluña</td>
                <td ><input type="button" id="prediccion3"  class="btn btn-link ml-2" value="Obtener predicción" />
                </td>
                </tr>
                <tr>
                    <td>Costa de Galicia</td>
                    <td ><input type="button" id="prediccion4"  class="btn btn-link ml-2" value="Obtener predicción" />
                    </td>
                    </tr>
                    <tr>
                        <td> 	Costa de Illes Balears</td>
                        <td ><input type="button" id="prediccion5"  class="btn btn-link ml-2" value="Obtener predicción" />
                        </td>
                        </tr>
                        <tr>
                            <td>Costa de las Islas Canarias</td>
                            <td ><input type="button" id="prediccion6"  class="btn btn-link ml-2" value="Obtener predicción" />
                            </td>
                            </tr>
                            <tr>
                                <td>Costa de Valencia y Murcia</td>
                                <td ><input type="button" id="prediccion7"  class="btn btn-link ml-2" value="Obtener predicción" />
                                </td>
                                </tr>
            </table></p>
        </div>
      </div>
<h2></h2>







<script>
    urlmar42= "https://opendata.aemet.es/opendata/api/prediccion/maritima/costera/costa/45/?"; 
    document.getElementById("prediccion").onclick = function() {procesar(urlmar42)};

    urlmar47= "https://opendata.aemet.es/opendata/api/prediccion/maritima/costera/costa/47/?"; 
    document.getElementById("prediccion1").onclick = function() {procesar(urlmar47)};

    urlmar41= "https://opendata.aemet.es/opendata/api/prediccion/maritima/costera/costa/41/?"; 
    document.getElementById("prediccion2").onclick = function() {procesar(urlmar41)};

    urlmar45= "https://opendata.aemet.es/opendata/api/prediccion/maritima/costera/costa/45/?";
    document.getElementById("prediccion3").onclick = function() {procesar(urlmar45)};

    urlmar40= "https://opendata.aemet.es/opendata/api/prediccion/maritima/costera/costa/40/?"; 
    document.getElementById("prediccion4").onclick = function() {procesar(urlmar40)};

    urlmar44= "https://opendata.aemet.es/opendata/api/prediccion/maritima/costera/costa/44/?"; 
    document.getElementById("prediccion5").onclick = function() {procesar(urlmar44)};

    urlmar43= "https://opendata.aemet.es/opendata/api/prediccion/maritima/costera/costa/43/?"; 
    document.getElementById("prediccion6").onclick = function() {procesar(urlmar43)};

    urlmar46= "https://opendata.aemet.es/opendata/api/prediccion/maritima/costera/costa/46/?"; 
    document.getElementById("prediccion7").onclick = function() {procesar(urlmar46)};


</script>    
  
<br >         
<br >         
<br >         
<br >         

<div class="card">
    <h2 class="card-header">Contenido total de ozono</h2>
    <div class="card-body">
      <p class="card-title">    Dato medio diario de contenido total de ozono. Cada 24 h (actualmente, en fines de semana, festivos y vacaciones no se genera por la falta de personal en el Centro Radiométrico Nacional).</p>
  
      <input type="button" id="demo"  class="btn btn-info ml-2" value="Obtener datos" />
      <input type="button" id="demo2"  class="btn btn-info ml-2" value="Obtener metadatos" />
    </div>
  </div>

    <br >         
    <br >         

 

    <script>

        url="https://opendata.aemet.es/opendata/api/red/especial/ozono/?";
       
        document.getElementById("demo").onclick = function() {procesar(url)};
      


        urlmeta="https://opendata.aemet.es/opendata/api/red/especial/ozono/?";

        document.getElementById("demo2").onclick = function() {procesarmeta(urlmeta)};

        
            

    </script>   
    

                

</section><!-- #end content area -->
      
      

   
  </div><!-- #end div #main .wrapper -->
    


  <footer>
	<div id="colophon" class="wrapper clearfix">
    	Yocoima
    </div>
    
<div id="attribution" class="wrapper clearfix" style="color:#666; font-size:11px;">   Proyecto de Enrique Cazorla, alumno de 2º DAW del I.E.S Al-Ándalus.
</div>
    
</footer>


@endsection
