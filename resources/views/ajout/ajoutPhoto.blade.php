@extends('templates/barre-admin')

@section("content")
    <input type="hidden" name="nom_album" value="{!! $nom!!}">
    <form action="" method="post">
        {{ csrf_field() }}
        <input type="file" name="ajoutPhoto" >
        <input type="submit" value="Ajouter" name ="ajouter" >
       
    </form>
    <a href="{{route('AdminController.albumAdmin', ['nom'=>$nom])}}"><h1>Revenir à l'album {!! $nom!!}</h1></a>
    <div class="m-t-1 ban2"></div>
@endsection