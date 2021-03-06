
@extends('templates/barre-admin')

@section("content")
 <form action="" method="post">
    {{ csrf_field() }}
    
    <input type="hidden" name="editEtiquette" value="Yes">
    @foreach($etiquette as $eti)
        <input type="hidden" name="id" value="{!! $eti->id !!}">
        
        <label for="nomEdit">Nom</label>
        <input type="text"  id="nomEdit" name ="nom" value="{!! $eti->nom!!}"required>

        <label for="couleurEdit">couleur</label>
        <input type="color" id="couleurEdit" name ="couleur" value="{!! $eti->couleur !!}" required>
    @endforeach
    @foreach ($errors->all() as $error)
            <div class="Error">{{ $error }}</div>
        @endforeach
    <input type="submit" value="Editer" name ="edito" >
    <a href="{{route('AdminController.allPrestationsAdmin')}}"><h1>Revenir à toute les prestations</h1></a>
    <div class="m-t-1 ban2"></div>
@endsection