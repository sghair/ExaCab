
<style>
 .uper {
    margin-top: 40px;

  }
 #contact_contenu {
  padding-top: 50px;
    padding: 15px;
    background-color: #f9f9f9;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
    -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
}
div {
    display: block;
}
#contact_contenu {
    width: auto;
}

</style>
@extends('admin')
@section('content')



<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div id="contact_contenu"><div id="contact_contenu_label">Contactez-nous</div>
  		<div class="blank_space"></div>
		
        <div id="contact_entete"></div>
        
        <form action="/contact" id="contact_form" method="post" accept-charset="utf-8">
            @csrf
            <input type="hidden" name="cstoemit8" value="472de259dab0e118a049f87436d3f11f">                                                                                                                              
    
    <input type="hidden" name="uri_from" value="tutoriels-introduction-apprendre-referencement-site-internet-medical/creer-logo-et-web-design-site-internet-medical-astuces-et-conseils.html">
    
    <input type="hidden" name="page_name" value="Créer un logo et le web design Astuces &amp; Conseils">
    <p><input type="text" name="contact_lastname" value="" id="contact_lastname" required="required" placeholder="Nom *">
    </p><p><input type="text" name="contact_firstname" value="" id="contact_firstname" placeholder="Prénom">
    </p><p><input type="text" name="contact_city" value="" id="contact_city" placeholder="Ville">
    </p><p><input type="email" name="contact_email" value="" id="contact_email" required="required" placeholder="E-mail *">
    </p><p><input type="tel" name="contact_phone" value="" id="contact_phone" required="required" placeholder="Téléphone *">
    </p><p><textarea name="contact_message" cols="40" rows="10" id="contact_message" required="required" placeholder="Message *"></textarea>
    </p><input type="submit" name="submit_contact" value="Envoyer" class="bouton">
    </form></div>
       
   

@endsection
