<!DOCTYPE html>
<html class="no-js"> 
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>@yield('titulo')</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

<link rel="shortcut icon" href="{{asset("images/favicon.ico")}}"  type="image/x-icon">
<link href="{{asset("http://fonts.googleapis.com/css?family=Droid+Serif|Ubuntu")}}" rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css")}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://use.fontawesome.com/28be3f8363.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>  
<script type="text/javascript" src="https://www.google.com/jsapi"></script>  
<link rel="stylesheet" href="{{asset("css/normalize.css")}}">
<link rel="stylesheet" href="{{asset("js/flexslider/flexslider.css")}}">
<link rel="stylesheet" href="{{asset("css/portada.css")}}">
<script src="js/libs/modernizr-2.6.2.min.js"></script>
<script src="js/llamada.js"></script>

</head>

<body id="home">
    <div id="headerc">
    <header class="wrapper clearfix">         
        <nav id="topnav" role="navigation">
        <div class="menu-toggle">Menu  </div>   

          <ul class="srt-menu" id="menu-main-navigation">
              <li class="current"><a href="{{route('portal')}}">Home </a></li>
              <li><a href="{{route('info')}}">Open Data</a>
                  <ul>
                      <li>
                          <a href="{{route('aemet')}}">AEMET</a>
                      </li>
                      <li>
                          <a href="{{route('nasa')}}">NASA</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="#">Conócenos</a>
                  <ul>
                    <li><a href="{{route('hacemos')}}">¿Qué hacemos?</a></li>
                      <li><a href="{{route('somos')}}">¿Quiénes somos?</a></li> 
                  </ul>
              </li>
              <li><a href="{{route("colabora")}}">Colabora</a></li>

              <li>
                  <a href="{{route('login')}}">Accede</a>
              </li>	
          </ul>  
        </nav>
    

        @yield('contenido')
    <!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\x3C/script>')</script>

<script defer src="js/flexslider/jquery.flexslider-min.js"></script>

<!-- fire ups - read this file!  -->   
<script src="js/main.js"></script>
</body>
</html>