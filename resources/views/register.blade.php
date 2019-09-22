<!DOCTYPE html>
<html lang="en">
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
        <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                  <a id="logo-container" href="#" class="brand-logo">EPARS</a>

                  <ul class="right ">
                    <li><a  class='modal-trigger' href="#modal1">Login </a></li>
                   
                  </ul>
                 {{-- Login Modal --}}
                  <div id="modal1" class="modal  grey lighten-2">
                     <div class="modal-content">
                       <h4 class="black-text">Login</h4>
                       <div class="row">
                           <form class="col s12">
                             <div class="row">
                              
                               <div class="input-field col s12">
                                 <input id="username" type="text" class="validate">
                                 <label for="username">Username</label>
                               </div>
                             </div>
                           
                             <div class="row">
                               <div class="input-field col s12">
                                 <input id="password" type="password" class="validate">
                                 <label for="password">Password</label>
                               </div>
                             </div>
                             <button class="btn waves-effect waves-light" type="submit" name="action">Login                            
                             </button>
                            
                           </form>
                         </div>
                     </div>
                     
                   </div>

                 </div>
              </nav>
              <div class="row container">
                  <h1>Registration Form</h1>
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="first_name" type="text" class="validate">
                          <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                          <input id="last_name" type="text" class="validate">
                          <label for="last_name">Last Name</label>
                        </div>
                      
                     
                            <div class="input-field col s12 m6">
                              <input id="username" type="text" class="validate">
                              <label for="username">Username</label>
                            </div>
                        
                    
                        <div class="input-field col s12 m6">
                          <input id="password" type="password" class="validate">
                          <label for="password">Password</label>
                        </div>
                     
                        <div class="input-field col s12">
                          <input id="email" type="email" class="validate">
                          <label for="email">Email</label>
                        </div>
                      </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Register
                    </button>
                    </form>
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