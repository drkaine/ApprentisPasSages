@extends('templates/barre-admin')

@section("content")
    <input type="hidden" name="nom_album" value="{{$nom}}">
    <form action="" method="post">
        {{ csrf_field() }}
        <input type="file" name="ajoutPhoto" >
        <input type="submit" value="Ajouter" name ="ajouter" >
        @foreach($catalogues as $cat)
          @php
            $compte++;
          @endphp
          <div>
            
            <input type="checkbox" id="catt" name="catt{{$compte}}"
            @foreach($actionCatalogue as $aCatalogue)
              @if($act->id==$aCatalogue->action_id and $cat->id==$aCatalogue->catalogue_id )
                checked
              @endif
            @endforeach>
            <label for="scales">{{$cat->nom}}</label>
              
            <input type="hidden" name="catalogueId{{$compte}}" value="{{$cat->id}}">
          </div>
        @endforeach
    </form>
    <a href="{{route('TemplateController.albumAdmin', ['nom'=>$nom])}}"><h1>Revenir à l'album {{$nom}}</h1></a>
    <div class="m-t-1 ban2"></div>
@endsection