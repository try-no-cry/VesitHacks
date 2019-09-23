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
                         <h2 class="center brown-text"><i class="material-icons">dns</i></h2>
                         <a href="{{ url('/register') }}"><h5 class="center">Add</h5></a>
                         <p class="center light">Add a new member</p>
                       </div>
                     </div>
                       
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">cloud_upload</i></h2>
                         <a href="{{ url('/delete') }}"><h5 class="center">Remove</h5></a>
             
                         <p class="center light">Remove a member</p>
                       </div>
                     </div>
                       
                     <div class="col s12 m4">
                       <div class="icon-block">
                         <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                         <h5 class="center"><a href='/viewreport'>Modify</a></h5>
             
                         <p class="center light">Modify details of a member</p>
                       </div>
                     </div>
                     
                   </div>
             
                 </div>
               </div>
</div>
@endsection