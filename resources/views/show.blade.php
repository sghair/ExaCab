@extends('admin')
@section('content')
<span><b> Patients List</b></span>
  @foreach ($patient  as $patient  )

    <div class="row list-group-item patient-Nom_pat-list">
       <div  class="col-sm-6">
         {{$patient   -> Nom_pat}} 
       </div>
       
    </div>
 
  @endforeach
 
 <div class="row list-group-item">

 <a href="{{ route('Patient.create')}}" class="btn btn-primary">Add</a>

 
       </div>
       @endsection
    


