@extends('layouts.app3')
@section('content')
<div class="row container" >
    <div class="container">
                  <h1>Registration Form</h1>
                    <form class="col s12" action="{{ route('register') }}" method="post">
                      <div class="row">
                          @csrf
                        <div class="input-field col s12 m6">
                          <input id="name" type="text" name="name" class="validate" required>
                          <label for="first_name">Name</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <input id="email" type="email" name="email" class="validate" required>
                          <label for="email">Email</label>
                        </div>
                      
                     
                            <div class="input-field col s12 m6">
                              <input id="password" type="password" name="password" class="validate" required>
                              <label for="password">password</label>
                            </div>
                        
                    
                        <div class="input-field col s12 m6">
                          <input id="designation" type="text" class="validate" name="designation" required>
                          <label for="designation">Designation</label>
                        </div>
                     
                        <div class="input-field col s12 m6">
                          <input id="role" type="number" name="role" class="validate" required>
                          <label for="role">Role</label>
                        </div>
                          
                        <div class="input-field col s12 m6">
                          <input id="address" type="text" name="address" class="validate" required>
                          <label for="address">Address</label>
                        </div>
                          
                        <div class="input-field col s12 m6">
                          <input id="contact" type="number" class="validate" name="contact" pattern="[0-9]{10}" required>
                          <label for="contact">Contact</label>
                        </div>  
                          
                        <div class="input-field col s12 m6">
                          <input id="cpi" type="number" class="validate" name="current_project_id" required>
                          <label for="cpi">Current Project ID</label>
                        </div>  
                        
                          <div class="input-field col s12 m6">
                          <input id="sal" type="number" class="validate" name="salary" required>
                          <label for="sal">Salary</label>
                        </div>
                          
                        <div class="input-field col s12 m6">
                          <input id="ccpi" type="text" class="validate" name="projects_done" required>
                          <label for="ccpi">Completed Projects ID</label>
                        </div>
                          
                      </div>
                    <button class="btn waves-effect waves-light" type="submit"  name="submit">Register
                    </button>
                    </form>
                  </div>  
</div>
@endsection