
@extends('barre-admin')

@section("content")


 <form action="" method="post">
    {{ csrf_field() }}
    
    <input type="hidden" name="ajoutCatalogue" value="Yes">
    
  
 <label for="nomEdit">Nom</label>
  <textarea id="nomEdit" name ="nom" >

</textarea>

    
    <input type="submit" value="Ajouter" name ="ajouter" >
</form>

<a href="{{route('Accueil-Admin')}}"><h1>Revenir à l'accueil</h1></a>
 
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>


<script>
CKEDITOR.replace( 'nomEdit', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>

<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>

@endsection