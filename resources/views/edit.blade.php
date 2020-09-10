@extends('admin')

@section('content')


<div class="card uper">
  
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    
    <form  action="{{route('Patient.create',['patient'=>$patient ->Id_pat])}}" method="POST" >
   
      @csrf()
      @method('PUT')
      
           <div class="form-group">
              <label for="name" >Id_pat:</label>
              <input type="text" class="form-control" name="Id_pat" value="{{ $patient ->Id_pat }}"/>
           
          </div>
          <div class="form-group">
              <label for="price">Id_dossier:</label>
              <input type="text" class="form-control" name="Id_dossier" value="{{ $patient ->Id_dossier }}"/>
          </div>
          <div class="form-group">
              <label for="price">CIN_pat :</label>
              <input type="text" class="form-control" name="CIN_pat" value="{{ $patient ->CIN_pat }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Nom_pat:</label>
              <input type="text" class="form-control" name="Nom_pat" value="{{ $patient ->Nom_pat }}"/>
          </div>
    
          <div class="form-group">
              <label for="quantity">Prenom_pat:</label>
              <input type="text" class="form-control" name="Prenom_pat" value="{{ $patient ->Prenom_pat }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Date_naiss_pat:</label>
              <input type="text" class="form-control" name="Date_naiss_pat" value="{{ $patient ->Date_naiss_pat}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Sex:</label>
              <input type="text" class="form-control" name="Sex" value="{{ $patient ->Sex}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Profession:</label>
              <input type="text" class="form-control" name="Profession" value="{{ $patient ->Profession }}"/>
          </div>
          <div class="form-group">
         
              <label for="quantity">Adresse_pat:</label>
              <input type="text" class="form-control" name="Adresse_pat" value="{{ $patient ->Adresse_pat }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Tel:</label>
              <input type="text" class="form-control" name="Tel" value="{{ $patient ->Tel }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Antecedents:</label>
              <input type="text" class="form-control" name="Antecedents" value="{{ $patient ->Antecedents }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Groupe_sanguine:</label>
              <input type="text" class="form-control" name="Groupe_sanguine" value="{{ $patient ->Groupe_sanguine }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Code_APCI:</label>
              <input type="text" class="form-control" name="Code_APCI" value="{{ $patient ->Code_APCI }}"/>
          </div>
          


             
          <button type="submit" class="btn btn-primary">Update Patient</button>
      </form>
 @endsection
