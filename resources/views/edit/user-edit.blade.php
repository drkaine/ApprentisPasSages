@extends('templates/barre-admin')

@section("content")

    @foreach($user as $u)
        <form action="" method="post">
            {{ csrf_field() }}
            
            <input type="hidden" name="editnom" value="Yes">
            <input type="hidden" name="id" value="{!! $u->id!!}">

            <label for="emailEdit">Mail</label>
            <input type="text" id="emailEdit" name ="email" value="{!! $u->email!!}"required>
        
            <label for="nomEdit">Nom</label>
            <input type="text" id="nomEdit" name ="nom" value="{!! $u->name!!}">
 
            <input type="submit" value="Editer" name ="edito" >
        </form>
        <a href="/user-gestion"><h1>Revenir à gestionnaire utilisateur</h1></a>
        <div class="m-t-1 ban2"></div>
    @endforeach
@endsection