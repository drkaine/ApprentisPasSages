
@extends('barre-admin')

@section("content")

@foreach($ccdc as $cc)
 <form action="" method="post">
    {{ csrf_field() }}
    
    <input type="hidden" name="editCategorieCC" value="Yes">
    <input type="hidden" name="id" value="{{$cc->id}}">
  
 <label for="nomEdit">Nom</label>
  <textarea id="nomEdit" name ="nom" >
{{$cc->nom}}
</textarea>

    
    <input type="submit" value="Editer" name ="edito" >
</form>

<a href="{{route('coupDeCoeur-Admin')}}"><h1>Revenir à Coups de Coeur</h1></a>
 
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
@endforeach
@endsection