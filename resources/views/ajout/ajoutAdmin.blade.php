
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

<a href="/user-gestion"><h1>Revenir au gestionnaire utilisateur</h1></a>

@endsection