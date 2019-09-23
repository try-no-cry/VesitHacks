@extends('app')

@section('content')

<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>

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
                         <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                         <a href="{{ url('/profiledetails') }}"><h5 class="center">Profile</h5></a>
                         <p class="center light">View Profile Deatils</p>
                       </div>
                     </div>
             
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                         <a href="{{ url('/sendreport') }}"><h5 class="center">Send reports</h5></a>
             
                         <p class="center light">Send new report to your direct supervisor</p>
                       </div>
                     </div>
                       
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                         <h5 class="center"><a href='/viewreport'>View received reports</a></h5>
             
                         <p class="center light">View reports from your direct subordinates</p>
                       </div>
                     </div>
                     
                    <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                         <h5 class="center"><a href='/rate'>Rate subordinates</a></h5>
             
                         <p class="center light">Generate new ratings of your direct subordinates</p>
                       </div>
                     </div>
                       
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                         <h5 class="center"><a href='/viewrate'>View ratings</a></h5>
             
                         <p class="center light">Display ratings of your direct subordinates</p>
                       </div>
                     </div>
             
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                         <a href="{{ url('/alert') }}"><h5 class="center">Alert Boss</h5></a>
                         
             
                         <p class="center light">Alert your direct superior about exceptional/poor performance of your subordinates</p>
                       </div>
                     </div>
                   </div>
             
                 </div>
               </div>
@endsection