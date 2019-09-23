@extends('layouts.app')

@section('content')

<ul>
@foreach($reports as $report)

<li>
<a class='modal-trigger' href="#modal1/id={{ $report->report_id }}" >{{ $report->title }}</a>
<!-- open a modal on clicking above link -->
<!-- {{ $report->title }} -->
</li>
 
@endforeach
</ul>

  


  
@endsection