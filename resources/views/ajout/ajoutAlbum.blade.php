
@extends('templates/barre-admin')

@section("content")


 <form action="" method="post">
    {{ csrf_field() }}

    <input type="hidden" name="ajoutAlbum" value="Yes">


 <label for="nomEdit">Nom</label>
  <textarea id="nomEdit" name ="nom" >

</textarea>


    <input type="submit" value="Ajouter" name ="ajouter" >
</form>

<a href="{{route('Galerie-Admin')}}"><h1>Revenir à la galerie</h1></a>

<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>

@endsection
