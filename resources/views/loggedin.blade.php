<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       

        <title>EPARS</title>
 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">

  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

 <!--Let browser know website is optimized for mobile-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
    <body>
            <nav>
                    <div class="nav-wrapper">
                      <a href="#!" class="brand-logo">Logo</a>
                      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                      <ul class="right hide-on-med-and-down">
                        <li><a href="#">Option 1</a></li>
                        <li><a href="#">Option 2</a></li>
                        <li><a href="#">Option 3</a></li>
                        <li><a href="#">Option 4</a></li>
                      </ul>
                    </div>
                  </nav>
                
                  <ul class="sidenav" id="mobile-demo">
                        <li><a href="#">Option 1</a></li>
                        <li><a href="#">Option 2</a></li>
                        <li><a href="#">Option 3</a></li>
                        <li><a href="#">Option 4</a></li>
                  </ul>

                  <div class="container">
                        <div class="section">
                    
                          <!--   Icon Section   -->
                          <div class="row">
                            <div class="col s12 m4">
                              <div class="icon-block">
                                <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                                <h5 class="center">Speeds up development</h5>
                    
                                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                              </div>
                            </div>
                    
                            <div class="col s12 m4">
                              <div class="icon-block">
                                <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                                <h5 class="center">User Experience Focused</h5>
                    
                                <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                              </div>
                            </div>
                    
                            <div class="col s12 m4">
                              <div class="icon-block">
                                <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                                <h5 class="center">Easy to work with</h5>
                    
                                <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                              </div>
                            </div>
                          </div>
                    
                        </div>
                      </div>
                    
                    
               <footer class="page-footer teal">
                 <div class="container">
                   <div class="row">
                     <div class="col l6 s12">
                       <h5 class="white-text">Company Bio</h5>
                       <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
             
             
                     </div>
                     <div class="col l3 s12">
                       <h5 class="white-text">Settings</h5>
                       <ul>
                         <li><a class="white-text" href="#!">Link 1</a></li>
                         <li><a class="white-text" href="#!">Link 2</a></li>
                         <li><a class="white-text" href="#!">Link 3</a></li>
                         <li><a class="white-text" href="#!">Link 4</a></li>
                       </ul>
                     </div>
                     <div class="col l3 s12">
                       <h5 class="white-text">Connect</h5>
                       <ul>
                         <li><a class="white-text" href="#!">Link 1</a></li>
                         <li><a class="white-text" href="#!">Link 2</a></li>
                         <li><a class="white-text" href="#!">Link 3</a></li>
                         <li><a class="white-text" href="#!">Link 4</a></li>
                       </ul>
                     </div>
                   </div>
                 </div>
                 <div class="footer-copyright">
                   <div class="container">
                   Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
                   </div>
                 </div>
               </footer>
             
     <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script src="{{ asset('js/scr.js') }}"></script>
 
 </body>
</html>
