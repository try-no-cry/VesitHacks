
@extends('layouts.app2')
@section('content')

    <ul  class="collapsible container center margin-left:200px">
    <!-- $key = array_search('green', $array); // $key = 2;
 -->
       <!-- index of each name repesents its id -->
      @foreach($team as $name)
      <li>
      <div class="collapsible-header"><i class="material-icons">group</i>{{$name}}</div>
           <?php $key=array_search($name ,$team ) ?>
           <div class="collapsible-body">
                <form action="{{ url('review',['uid'=> $key])  }}" method="POST" >
                @csrf
                <ul>
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
                    <div>
                        <input type="submit" class="center btn btn-submit" value="Submit">
                   </div>
                    </ul>
            </form>
           </div>
        
    @endforeach

    </ul>
    
    <script>
        $(document).ready(function(){
    $('.collapsible').collapsible();
  });
    </script>
@endsection