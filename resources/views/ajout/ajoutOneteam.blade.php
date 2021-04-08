
@extends('templates/barre-admin')

@section("content")
 <form action="" method="post">
    {{ csrf_field() }}
    
    <input type="hidden" name="ajoutMembres" value="Yes">
    
  <label for="prenomEdit">Prenom</label>
   <textarea id="prenomEdit" name ="prenom" >

</textarea>

 <label for="prenomEdit">Nom</label>
  <textarea id="nomEdit" name ="nom" >

</textarea>

<label for="photoEdit">photo</label>
  <textarea id="photoEdit" name ="photo" >

</textarea>


<label for="descriptionEdit">description</label>   
<textarea id="descriptionEdit" name ="description" >

</textarea>
 
      
    
    
     <label for="telephonEdit">telephone</label>
  <textarea id="telephonEdit" name ="telephone" >

</textarea>
     
     <label for="emailEdit">email</label>
  <textarea id="emailEdit" name ="email" >

</textarea>
  
  
  <div class="col-4 m-auto">
      <h2 class="titreH2prestation pt-5">Rôle(s) dans l'association</h2>
      @php
          $compte=0;
      @endphp
      @foreach($statut as $statu)
        @php
          $compte++;
      @endphp
      <div>
         
          <input type="checkbox" id="statt" name="statt{{$compte}}">
          <label for="scales">{{$statu->nom}}</label>
         
          <input type="hidden" name="statutId{{$compte}}" value="{{$statu->id}}">
    </div>
      @endforeach
      <input type="hidden" name="compte" value="{{$compte}}">
    </div>
    
    <input type="submit" value="Ajouter" name ="ajouter" >
</form>



 
 
  
  
  
<a href="{{route('Accueil-Admin')}}"><h1>Revenir à Accueil</h1></a>
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>
CKEDITOR.replace( 'descriptionEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
 <script>
CKEDITOR.replace( 'prenomEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
<script>
CKEDITOR.replace( 'nomEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>

<script>
CKEDITOR.replace( 'photoEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>

<script>
CKEDITOR.replace( 'telephonEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>


 <script>
CKEDITOR.replace( 'emailEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>

<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
@endsection