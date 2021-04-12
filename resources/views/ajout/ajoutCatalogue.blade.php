@extends('templates/barre-admin')

@section("content")

    <form action="" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="ajoutCatalogue" value="Yes">
   
        <label for="nomEdit">Nom</label>
        <input type="text" id="nomEdit" name ="nom" >

        <input type="submit" value="Ajouter" name ="ajouter" >
    </form>

    <a href="{{route('Accueil-Admin')}}"><h1>Revenir à l'accueil</h1></a>

    <div class="m-t-1 ban2"></div>
@endsection