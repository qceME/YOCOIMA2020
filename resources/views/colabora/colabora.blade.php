@extends('plantillas.plantilla')
@section('titulo')
    ¿Quienes somos?
@endsection
@section('contenido')


</header>
</div>
<div class="imagencolabora">

<div class="colabora" id="main"> 

  
    
    
        <p align='center'>Realice una donación si es su voluntad.<hr>
    <select name="currency_code">
            <option value="EUR" select="selected">Euros (EUR)</option>
            <option value="GBP">Pounds de Gran Bretaña (GBP)</option>
            <option value="USD">Dolar de Estados Unidos (USD)</option>
            <option value="CAD">Dolar canadiense (CAD)</option>
            <option value="JPY">Yen Japonés (JPY)</option>
        </select>
        <input type="text" size="5" name="amount" value="10"/>&nbsp;
        <a href="#" class='btn btn-success'>Donar</a><br><hr>
        

        

¿Desea pagar con Paypal?<br><a  href="https://www.paypal.com/es/home" class='btn btn-success'>Donar por PayPal</a>
</p></div>     

            
   
</div>


</div>
    <footer>
        <div id="colophon" class="wrapper clearfix">
            footer stuff
        </div>
        
    <!--You can NOT remove this attribution statement from any page, unless you get the permission from prowebdesign.ro--><div id="attribution" class="wrapper clearfix" style="color:#666; font-size:11px;">Site built with <a href="http://www.prowebdesign.ro/simple-responsive-template/" target="_blank" title="Simple Responsive Template is a free software by www.prowebdesign.ro" style="color:#777;">Simple Responsive Template</a> by <a href="http://www.prowebdesign.ro/" target="_blank" title="www.prowebdesign.ro" style="color:#777;">Prowebdesign.ro</a></div><!--end attribution-->
        
    </footer><!-- #end footer area --> 
</div>
    
    @endsection
    