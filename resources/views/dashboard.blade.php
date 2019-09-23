@extends('layouts.app')

@section('content')



<div class="container">
                <h1 class="center">Dashboard</h1>
             
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
                         <h2 class="center brown-text"><i class="material-icons">dns</i></h2>
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
                         <h2 class="center brown-text"><i class="material-icons">assessment</i></h2>
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