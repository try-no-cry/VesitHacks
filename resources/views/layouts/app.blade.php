<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <style>
            #page-container {
              position: relative;
              min-height: 100vh;
            }

            #content-wrap {
              padding-bottom: 15rem;    /* Footer height */
            }

            footer {
              position: absolute;
              bottom: 0;
              width: 100%;
              height: 15rem;            /* Footer height */
            }

        </style>
        <meta charset="utf-8">
       

        <title>EPARS</title>
 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Employee Management') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

 <!--Let browser know website is optimized for mobile-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
    
    
    
    
    <body>
 <div id="page-container">
   <div id="content-wrap">
     <!-- all other page content -->



     
     <nav role="navigation" style="background-color: #B3E5FC">
    <div class="nav-wrapper container">
    <img id="logo-container" class="brand-logo" src="images/EPRAS-ICON.png">
      <ul id="nav-mobile" class="right" style="margin:14px">
      <form action="{{ url('/logout') }}" method="post">
                   @csrf
                            <li><button  class="right btn waves-effect waves-light" style="background-color:#3F51B5" type="submit">Logout</button></li>
                   </form>
      </ul >
    </div>
  </nav>
        
       <!-- <nav role="navigation" style="background-color: #B3E5FC">
                 <div class="nav-wrapper container" >
                   <img id="logo-container" class="brand-logo" src="images/EPRAS-ICON.png">
                     <form action="{{ url('/logout') }}" method="post">
                   @csrf
                            <button  class="right btn waves-effect waves-light" type="submit">Logout</button>
                   </form>
                  </div>
               </nav> -->

     @yield('content')
   </div>
   <footer class="page-footer" style="background-color:#3F51B5">
                 <div class="container">
                   <div class="row">
                     <div class="col m5 s12">
                       <h5 class="white-text">EPARS</h5>
                       <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
             
             
                     </div>
              
                
                     <div class="col m3 offset-m3 s12">
                       <h5 class="white-text">Connect</h5>
                       <ul>
                       <li><a class="white-text" href="https://facebook.com">Facebook</a></li>
                         <li><a class="white-text" href="https://instagram.com">Instagram</a></li>
                         <li><a class="white-text" href="https://twitter.com">Twitter</a></li>
                         <li><a class="white-text" href="https://linkedin.com">LinkedIn</a></li>
                       </ul>
                     </div>
                   </div>
                 </div>
               </footer>
 </div>
                    <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script>
$(document).ready(function(){
 
  $('.sidenav').sidenav();
  $('.parallax').parallax();
  $('.dropdown-trigger').dropdown();
  $('.modal').modal();
 

});
     

     </script>
 </body>
</html>