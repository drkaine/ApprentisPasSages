
@extends('templates/barre-admin')

@section("content")
 <form action="" method="post">
    {{ csrf_field() }}
    
    <input type="hidden" name="ajoutAdmin" value="Yes">
     
    <label for="emailEdit">email</label>
    <input type="email" id="emailEdit" name ="email" required>

    <label for="nameEdit">Nom</label>
    <input type="text" id="nameEdit" name ="name" required>

    <input type="submit" value="Ajouter" name ="ajouter" >
</form>

<a href="{{route('Accueil-Admin')}}"><h1>Revenir à Accueil</h1></a>

@endsection