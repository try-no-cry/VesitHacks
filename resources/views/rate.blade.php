<html>
    <head>
        <style>
            .h {
                display:none;
            }
            .sh:hover .h{
                display: block;
            }    
            li {
                width: 65%;
            }
        </style>
    </head>
</html>
@extends('layouts.app')
@section('content')
    <ol>
    <!-- $key = array_search('green', $array); // $key = 2;
 -->
       <!-- index of each name repesents its id -->
      @foreach($team as $name)
        <div class="sh">
            <li>{{ $name }}</li>
            <div class="h">
           <?php $key=array_search($name ,$team ) ?>
                <form action="{{ url('review',['uid'=> $key])  }}" method="POST">
                @csrf
                <ul>
                    <li><input type="number" name="punctuality" placeholder="Punctuality(0-10)" min="0" max="10" required></li>
                    <li><input type="number" name="targets_acheived" placeholder="Targets acchived(0-10)" min="0" max="10" required></li>
                    <li><input type="number" name="behaviour" placeholder="Behaviour(0-10)" min="0" max="10" required></li>
                    <li><input type="number" name="contribution" placeholder="Contribution(0-10)" min="0" max="10" required></li>
                </ul>
                <input type="submit" value="Submit">
            </form>
            </div>
        </div>
    @endforeach

    </ol>
@endsection