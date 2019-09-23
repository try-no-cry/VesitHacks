
@extends('master')

@section('content')


 

             
               <div id="index-banner" class="parallax-container">
                 <div class="section no-pad-bot">
                   <div class="container">
                     <br><br>
                     <h2 class="header center">Employee Performance And Rating System</h2>
                      <br><br>
                     <div class="row center">
                       <h5 class="header col s12 light blwack-text">
                        An efficient way to assess & track your employees  <br> and enhance your organisation's performance
                      </h5>
                     </div>
                     <div class="row center">
                       <a href="/register" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Register</a>
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
                         <h5 class="center">Quick And Efficient</h5>
             
                         <p class=" center light">View, track and assess records<br> of all employees, <br>all at your fingertips<p>
                       </div>
                     </div>
             
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                         <h5 class="center">User Friendly</h5>
             
                         <p class="center light">Easy to manage and keep track<br> of current and completed projects<br> and make changes to existing users </p>
                       </div>
                     </div>
             
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                         <h5 class="center">Easy to work with</h5>
             
                         <p class="center light">Statistics are displayed and rated based<br> on Employee's performance based <br>on a scale 1-10 considering various reviews.</p>
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
                       <a href="{{ url('/contact') }}"><h4>Contact Us</h4></a>
                      
                     </div>
                   </div>
                   <div class="row">
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">email</i></h2>
                         <h5 class="center">Email Us</h5>
             
                         <p class=" center light"> info@epars.in</p>
                       </div>
                     </div>
             
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">local_phone</i></h2>
                         <h5 class="center">Call  Us</h5>
             
                         <p class="center light">+91-9876543210<br>+91-8976543210</p>
                       </div>
                     </div>
             
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">navigation</i></h2>
                         <h5 class="center">Locate Us</h5>
             
                         <p class="center light">123, ABC IT Park,<br> Goregaon (E.), Mumbai-400097</p>
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
                 <div class="parallax"><img src="images/background3.jpg" alt="Unsplashed background img 3"></div>
               </div>
             
              
             

@endsection