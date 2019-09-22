@extends('app')

@section('content')

<ul>
@foreach($reports as $report)

<li>
<a class='modal-trigger' href="#modal1/id={{ $report->report_id }}" >{{ $report->title }}</a>
<!-- open a modal on clicking above link -->
</li>
 
@endforeach
</ul>

    
<div id="modal1/{{ $_GET['id']  }}" class="modal  grey lighten-2">
                      <div class="modal-content">
                        <h4 class="black-text" style="text-color:white">Login</h4>
                        <div class="row">
                            <form  action="{{ route('login') }}" method="post" class="col s12">
                              @csrf
                              <div class="row">
                               
                                <div class="input-field col s12">
                                  <input id="email" type="text" name="email" class="validate">
                                  <label for="email">Email</label>
                                </div>
                              </div>
                            
                              <div class="row">
                                <div class="input-field col s12">
                                  <input id="password" type="password" name="password"  class="validate">
                                  <label for="password">Password</label>
                                </div>
                              </div>
                              <button class="btn waves-effect waves-light" type="submit" name="login">Login                            
                              </button>
                             
                            </form>
                          </div>
                      </div>
                      
                    </div>

  
@endsection