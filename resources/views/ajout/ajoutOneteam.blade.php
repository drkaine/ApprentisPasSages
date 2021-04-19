@extends('templates/barre-admin')

@section("content")
 <form action="" method="post">
    {{ csrf_field() }}
    
    <input type="hidden" name="ajoutMembres" value="Yes">
    
    <label for="prenomEdit">Prenom</label>
    <input type="text" id="prenomEdit" name ="prenom">

    <label for="nomEdit">Nom</label>
    <input type="text" id="nomEdit" name ="nom" >

    <div>
      @php
            $compte=0;
        @endphp
      @foreach ($photos as $p)
        @php
            $compte++;
        @endphp
          <input type="checkbox" id="photo{!! $compte !!}" name="chemin" value="{{$p->chemin}}">
          <label for="scales">
            <img src={{ asset("storage/images/$p->chemin ") }}  class="ajout-photo" data-toggle="modal" data-target="#myModal{{$compte}}">
            <!-- Modal -->
            <div id="myModal{{$compte}}" class="modal fade" role="dialog">
              <div class="modal-dialog">
                @include("modal/photo")
              </div>
            </div>
          </label>
      @endforeach
    </div>

    <label for="descriptionEdit">description</label>   
    <textarea id="descriptionEdit" name ="description"></textarea>
 
    <label for="telephonEdit">telephone</label>
    <input type="tel" id="telephonEdit" name ="telephone">

    <label for="emailEdit">email</label>
    <input type="email" id="emailEdit" name ="email">

    <div class="col-4 m-auto">
      <h2 class="titreH2prestation pt-5">Rôle(s) dans l'association</h2>
      @php
        $compte=0;
      @endphp
      @foreach($statut as $stattu)
        @php
          $compte++;
        @endphp
        <div>
          <input type="checkbox" id="statt" name="statt{!! $compte!!}">
          <label for="scales">{!! $stattu->nom!!}</label>
         
          <input type="hidden" name="statutId{!! $compte!!}" value="{!! $stattu->id!!}">
        </div>
      @endforeach
      <input type="hidden" name="compte" value="{!! $compte!!}">
    </div>
    <input type="submit" value="Ajouter" name ="ajouter" >
  </form>

  <a href="{{route('Accueil-Admin')}}"><h1>Revenir à Accueil</h1></a>
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
  <script>
    CKEDITOR.replace( 'descriptionEdit', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
  </script>
  <div class="m-t-1 ban2"></div>
@endsection