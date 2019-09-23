@extends('layouts.app')
@section('content')
        @foreach($udata as $d)
                <ul class="container ">
                
                   <li><a  class='modal-trigger' href="#modal1/{{$d->name}}">{{$d->name}} </a></li>
                    
                   </ul>

        <div id="modal1/{{$d->name}}" class="modal  grey lighten-2">
                      <div class="modal-content">
                        <h4 class="black-text" style="text-color:white">{{$d->name}}</h4>
                        <div class="row">
                            <form  action="{{ route('modifysubmit') }}" method="post" class="col s12">
                              @csrf
                              
                            <input type="int" name="user_id" value="{{$d->user_id}}" style="display:none">
                              <div class="row">
                                <div class="input-field col s12">
                                  <input id="email" type="email" name="email"  class="validate" value="{{$d->email}}" required>
                                  <label for="email">Email</label>
                                </div>
                              </div>
                                
                            <div class="row">
                                <div class="input-field col s12">
                                  <input id="designation" type="text" name="designation" class="validate" value="{{$d->designation}}" required>
                                  <label for="designation">Designation</label>
                                </div>
                              </div>
                            
                            <div class="row">
                                <div class="input-field col s12">
                                  <input id="role" type="number" name="role" class="validate" value="{{$d->role}}" required>
                                  <label for="role">Role</label>
                                </div>
                              </div>
                                
                            <div class="row">
                                <div class="input-field col s12">
                                  <input id="address" type="text" name="address" class="validate" value="{{$d->address}}" required>
                                  <label for="address">Address</label>
                                </div>
                              </div>
                         
                                <div class="row">
                                <div class="input-field col s12">
                                  <input id="contact" type="text" name="contact" class="validate" value="{{$d->contact}}" required>
                                  <label for="contact">Contact</label>
                                </div>
                              </div>
                                
                             <div class="row">
                                <div class="input-field col s12">
                                  <input id="current_project_id" type="number" name="current_project_id" class="validate" value="{{$d->current_project_id}}" required>
                                  <label for="current_project_id">Current project id</label>
                                </div>
                              </div>
                                
                            <div class="row">
                                <div class="input-field col s12">
                                  <input id="salary" type="number" name="salary" class="validate" value="{{$d->salary}}" required>
                                  <label for="salary">Salary</label>
                                </div>
                              </div>
                                
                            
                                 <div class="row">
                                <div class="input-field col s12">
                                  <input id="projects_done" type="text" name="projects_done" class="validate" value="{{$d->projects_done}}" required>
                                  <label for="projects_done">Projects done</label>
                                </div>
                              </div>
                                
                                
                                
                              <button class="btn waves-effect waves-light" type="submit" name="modify">Modify                            
                              </button>
                             
                            </form>
                          </div>
                      </div>
</div>
        @endforeach
@endsection