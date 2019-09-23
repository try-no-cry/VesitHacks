@extends('layouts.app')
@section('content')
<div class="container">
<h3 style="color:rgb(10,10,245);"> <u><center> REMOVE EMPLOYEES</center></u></h3>
<h4> List of Users: </h4>

@foreach($users as $u)


<ul class="">
&nbsp<li> <h5>{{ $u->name }} </h5>

<form action="{{url('deleteUser/'.$u->user_id)}}" method="get">
<button type="submit" class="btn waves-light waves-green"> <i class="material-icons"> X</i></button>

</form>

</li> 
</ul>

@endforeach
</div>


@endsection