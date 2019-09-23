@extends('layouts.app2')

@section('content')
<div class="container">
<ul>


<h3 style="color:rgb(10,10,245);"> <u><center> VIEW REPORTS</center></u></h3>
<h4>&nbsp List of Reports: </h4>
@foreach($reports as $report)

<ol type="i">
&nbsp<li>
<a class='modal-trigger' href="#modal1/id={{ $report->report_id }}" >{{ $report->title }}</a>

<!-- open a modal on clicking above link -->

  <!-- Modal Structure -->
  <div id="modal1/id={{ $report->report_id }}" class="modal container">
    <div class="modal-content">
    
      <h5>Title : {{ $report->title }}</h5>
      <h5>Description :{{ $report->message }}</h5>
   
    </div>
    <div class="modal-footer">
     <center><b> <a href="uploads/abhaytiwari@gmail.com/Reportby2.pdf" class="modal-close waves-effect waves-green btn-flat">
     VIEW PDF File</a></center></b>
    </div>
  </div>






<!-- {{ $report->title }} -->
</li>
 </ol>
@endforeach
</ul>

 




</div>
  
@endsection