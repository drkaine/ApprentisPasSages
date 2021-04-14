@extends('templates/barre-admin')

@section("content")

    @foreach($ccdc as $cc)
        <form action="" method="post">
            {{ csrf_field() }}
            
            <input type="hidden" name="editCategorieCC" value="Yes">
            <input type="hidden" name="id" value="{!! $cc->id!!}">
        
            <label for="nomEdit">Nom</label>
            <input type="text" id="nomEdit" name ="nom" value="{!! $cc->nom!!}"required>
 
            <input type="submit" value="Editer" name ="edito" >
        </form>
        <a href="{{route('coupDeCoeur-Admin')}}"><h1>Revenir à Coups de Coeur</h1></a>
        <div class="m-t-1 ban2"></div>
    @endforeach
@endsection