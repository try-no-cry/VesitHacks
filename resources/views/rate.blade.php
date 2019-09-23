
@extends('layouts.app2')
@section('content')
    <ol>
    <!-- $key = array_search('green', $array); // $key = 2;
 -->
       <!-- index of each name repesents its id -->
      @foreach($team as $name)
        <div class="sh">
            <li><a class="modal-trigger" href="#modal1/{{$name}}">{{ $name }} </a></li>
            
        </div>
            <div id="modal1/{{$name}}" class="modal container">
            <h6 class="center">Rate {{$name}}</h4>
           <?php $key=array_search($name ,$team ) ?>
                <form action="{{ url('review',['uid'=> $key])  }}" method="POST">
                @csrf
                <ul class="container">
                    <div class="input-field">
                        <input type="number" name="punctuality" id="punctuality" min="0" max="10" required>
                        <label for="punctuality">Punctuality</label>

                    </div>
                    <div class="input-field">
                        <input type="number" name="targets_acheived" id="punctuality" min="0" max="10" required>
                        <label for="punctuality">Targets Achieved</label>

                    </div>
                    <div class="input-field">
                        <input type="number" name="behaviour" id="punctuality" min="0" max="10" required>
                        <label for="punctuality">Behaviour</label>

                    </div>
                    <div class="input-field">
                        <input type="number" name="contribution" id="punctuality" min="0" max="10" required>
                        <label for="punctuality">Contribution</label>

                    </div>
                    
                        <input type="submit" class="right btn btn-submit" style="margin:10px auto;"value="Submit">
                   
                    </ul>
            </form>
            </div>
        
    @endforeach

    </ol>
@endsection