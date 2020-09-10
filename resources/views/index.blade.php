@extends('admin')
<style>
  .uper {
    margin-top: 40px;

  }

.table {
    font-size: 1rem;
    width: 100%;
    padding-left: 10px;
    margin-bottom: 1rem;
    color: #212529;
}


</style>



@section('content')

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
<div class="card-body">
  <table class="table  table-bordered ">
  
    <thead class="thead-dark">
        <tr >
          <th>Id_pat</th>
          <th>Id_dossier</th>
          <th>CIN_pat</th>
          <th>Nom_pat</th>
          <th>Prenom_pat</th>
          <th>Date_naiss_pat</th>
          <th>Sexe</th>
          <th>Profession</th>
          <th>Adresse_pat</th>
          <th>Tel</th>
          <th>Antecedents</th>
          <th>Groupe_sanguine</th>
          <th>Code_APCI</th>
          <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patient as $patient)
        <tr>
            <td>{{$patient->Id_pat}}</td>
            <td>{{$patient->Id_dossier}}</td>
            <td>{{$patient->CIN_pat}}</td>
            <td>{{$patient->Nom_pat}}</td>
            <td>{{$patient->Prenom_pat}}</td>
            <td>{{$patient->Date_naiss_pat}}</td>
            <td>{{$patient->Sexe}}</td>
            <td>{{$patient->Profession}}</td>
            <td>{{$patient->Adresse_pat}}</td>
            <td>{{$patient->Tel}}</td>
            <td>{{$patient->Antecedents}}</td>
            <td>{{$patient->Groupe_sanguine}}</td>
            <td>{{$patient->Code_APCI}}</td>
          
           
            <td >
            <a href="{{route('Patient.edit',['id'=> $patient->Id_pat])}}" class="btn btn-primary">Edit</a> 
            </td>
            <td>
            <form action="{{ route('Patient.delete',['id'=> $patient->Id_pat])}}" method="POST">
              
              
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
             </form>
             
              </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection
