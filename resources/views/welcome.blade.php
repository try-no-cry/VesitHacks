
@extends('master')

@section('content')
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

             
               <div id="index-banner" class="parallax-container">
                 <div class="section no-pad-bot">
                   <div class="container">
                     <br><br>
                     <h2 class="header center">Employee Performance And Rating System</h1>
                      <br><br>
                     <div class="row center">
                       <h5 class="header col s12 light blwack-text">
                        An efficient way to assess & track your employees  <br> and enhance your organisation's performance
                      </h5>
                     </div>
                     <div class="row center">
                       <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
                     </div>
                     <br><br>
             
                   </div>
                 </div>
                 <div class="parallax"><img src="images/background1.jpg" alt="Unsplashed background img 1"></div>
               </div>
             
             
               <div class="container">
                 <div class="section">
             
                   <!--   Icon Section   -->
                   <div class="row">
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                         <h5 class="center">Speeds up development</h5>
             
                         <p class="light">We track the performance of every employee and manage their employee profiles.<p>
                       </div>
                     </div>
             
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                         <h5 class="center">User Experience Focused</h5>
             
                         <p class="light">Easy to manage and keep track of current and completed projects</p>
                       </div>
                     </div>
             
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                         <h5 class="center">Easy to work with</h5>
             
                         <p class="light">Statistics are displayed based on Employee's performance based on a scale 1-10 considering various reviews.</p>
                       </div>
                     </div>
                   </div>
             
                 </div>
               </div>
             
             
               <div class="parallax-container valign-wrapper">
                 <div class="section no-pad-bot">
                   <div class="container">
                     <div class="row center">
                       <h5 class="header col s12 light"></h5>
                     </div>
                   </div>
                 </div>
                 <div class="parallax"><img src="images/background2.jpg" alt="Unsplashed background img 2"></div>
               </div>
             
               <div class="container">
                 <div class="section">
             
                   <div class="row">
                     <div class="col s12 center">
                       <h3><i class="mdi-content-send brown-text"></i></h3>
                       <p class="center">For any further doubts and queries </p>
                       <h4>Contact Us</h4>
                      
                     </div>
                   </div>
             
                 </div>
               </div>
             
             
               <div class="parallax-container valign-wrapper">
                 <div class="section no-pad-bot">
                   <div class="container">
                     <div class="row center">
                       <h5 class="header col s12 light"></h5>
                     </div>
                   </div>
                 </div>
                 <div class="parallax"><img src="images/background3.jpg" alt="Unsplashed background img 3"></div>
               </div>
             
<<<<<<< HEAD
               <footer class="page-footer teal">
                 <div class="container">
                   <div class="row">
                     <div class="col l6 s12">
                       <h5 class="white-text">EPARS</h5>
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
=======
            
>>>>>>> 38c5f01dfef53ac60b5e06da437c0507e8227813
             

@endsection