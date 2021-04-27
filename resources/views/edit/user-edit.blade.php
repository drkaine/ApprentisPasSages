@extends('templates/barre-admin')

@section("content")

    @foreach($user as $u)
        <form action="{{route('UserController.edit', ['id'=>$u->id])}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="editUser" value="Yes">
            <input type="hidden" name="id" value="{!! $u->id!!}">

            <label for="emailEdit">Mail</label>
            <input type="text" id="emailEdit" name ="email" value="{!! $u->email!!}"required>
        
            <label for="nomEdit">Nom</label>
            <input type="text" id="nomEdit" name ="name" value="{!! $u->name!!}" required>
            @foreach ($errors->all() as $error)
            <div class="Error">{{ $error }}</div>
        @endforeach
 
            <input type="submit" value="Editer" name ="edito" >
        </form>
        <a href="/user-gestion"><h1>Revenir à gestionnaire utilisateur</h1></a>
        <div class="m-t-1 ban2"></div>
    @endforeach
@endsection