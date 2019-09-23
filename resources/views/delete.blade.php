@extends('layouts.app')
@section('content')

<h3 style="color:rgb(10,10,245);"> <u><center> REMOVE EMPLOYEES</center></u></h3>
<h4>&nbsp List of Users: </h4>
<div>
@foreach($users as $u)
<h5>

<ul >
&nbsp<li>{{ $u->name }}
&nbsp
<!-- <form action="{{url('deleteUser/$u->user_id')}}" method="get"> -->
<button type="submit"> X</button>
<!-- </form> -->

</li> </h5>
</ul>

@endforeach
</div>


@endsection