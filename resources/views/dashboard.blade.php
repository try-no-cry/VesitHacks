@extends('master')
@section('content')
             
               <div class="container">
                 <div class="section">
             
                   <!--   Icon Section   -->
                   <div class="row">
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                         <h5 class="center"><a href='/profile'>Profile</a></h5>
             
                         <p class="center light">View Profile Deatils</p>
                       </div>
                     </div>
             
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                         <h5 class="center"><a href='/sendreport'>Send reports</a></h5>
             
                         <p class="center light">Send new report to your direct supervisor</p>
                       </div>
                     </div>
                       
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                         <h5 class="center"><a href='/viewreport'>View recieved reports</a></h5>
             
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
                         <h5 class="center"><a href='/alert'>Alert Boss</a></h5>
             
                         <p class="center light">Alert your direct superior about exceptional/poor performance of your subordinates</p>
                       </div>
                     </div>
                   </div>
             
                 </div>
               </div>
@endsection