@extends('admin')

@section('title', 'Create Patient')
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
   
   
	
      <form  action="{{route('Patient.store')}}" method="post">
   
      @csrf
           <h1  class="text-center">Ajouter Patient</h1>
          
           
          <div class="form-group row">
          <div class="col-sm-2">
              <label for="price">Id_dossier:</label>
              </div>
              <div class="col-sm-8">
              <input type="text" class="form-control" name="Id_dossier"/>
          </div>
          </div>
          <div class="form-group row">
          <div class="col-sm-2">
              <label for="price">CIN_pat :</label>
              </div>
              <div class="col-sm-8">
              <input type="text" class="form-control" name="CIN_pat"/>
          </div>
          </div>
          <div class="form-group row">
          <div class="col-sm-2">
              <label for="quantity">Nom_pat:</label>
              </div>
            
              <div class="col-sm-8">
              <input type="text" class="form-control" name="Nom_pat"/>
          </div>
          </div>
    
          <div class="form-group row">
          <div class="col-sm-2">
              <label for="quantity">Prenom_pat:</label>
              </div>
              <div class="col-sm-8">
              <input type="text" class="form-control" name="Prenom_pat"/>
          </div>
          </div>
          <div class="form-group row">
          <div class="col-sm-2">
              <label for="quantity">Date_naiss_pat:</label>
              </div>
              <div class="col-sm-8">
              <input type="text" class="form-control" name="Date_naiss_pat"/>
          </div>
          </div>
          <div class="form-group row">
          <div class="col-sm-2">
              <label for="quantity">Sexe:</label>
              </div>
              <div class="col-sm-8">
              <input type="text" class="form-control" name="Sexe"/>
          </div>
          </div>
          <div class="form-group row">
          <div class="col-sm-2">
              <label for="quantity">Profession:</label>
              </div>
              <div class="col-sm-8">
              <input type="text" class="form-control" name="Profession"/>
          </div>
          </div>
          <div class="form-group row">
          <div class="col-sm-2">
              <label for="quantity">Adresse_pat:</label>
              </div>
              <div class="col-sm-8">
              <input type="text" class="form-control" name="Adresse_pat"/>
          </div>
          </div>
          <div class="form-group row">
          <div class="col-sm-2">
              <label for="quantity">Tel:</label>
              </div>
              <div class="col-sm-8">
              <input type="text" class="form-control" name="Tel"/>
          </div>
          </div>
          <div class="form-group row">
          <div class="col-sm-2">
              <label for="quantity">Antecedents:</label>
              </div>
              <div class="col-sm-8">
              <input type="text" class="form-control" name="Antecedents"/>
          </div>
          </div>
          <div class="form-group row">
          <div class="col-sm-2">
              <label for="quantity">Groupe_sanguine:</label>
              </div>
              <div class="col-sm-8">
              <input type="text" class="form-control" name="Groupe_sanguine"/>
          </div>
          </div>
          <div class="form-group row">
          <div class="col-sm-2">
              <label for="quantity">Code_APCI:</label>
              </div>
              <div class="col-sm-8">
              <input type="text" class="form-control" name="Code_APCI"/>
          </div>
          </div>
        
          <button type="submit" class="btn btn-primary col-lg-3 mx-auto boutton">Create Patient</button>
     
      </form>
  

@endsection
