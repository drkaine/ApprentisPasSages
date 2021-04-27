
@extends('templates/barre-admin')

@section("content")
  <form action="" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="ajoutModule" value="Yes">    
    <input type="hidden" name="prestationId" value="{!! $prestation!!}">
     
    <label for="nomEdit">Nom</label>
    <input type="text" id="nomEdit" name ="nom" required>

    <label for="descriptionEdit">description</label>   
    <textarea id="descriptionEdit" name ="description" required></textarea>

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
            <img src={{ asset("storage/images/$p->chemin") }}  class="ajout-photo" data-toggle="modal" data-target="#myModal{{$compte}}">
            <!-- Modal -->
            <div id="myModal{{$compte}}" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    @include("modal/photo")
                </div>
            </div>
        </label>
      @endforeach
    </div>
     
    <label for="tempsEdit">Temps</label>
    <input type="time" id="tempsEdit" name ="temps">
    <br>
    <label for="materielEdit">Materiel</label>
    <textarea id="materielEdit" name ="materiel"></textarea>
     
    <label for="projetPedaEdit">Projet pédagogique</label>
    <textarea id="projetPedaEdit" name ="projetPeda"></textarea>
     
    <label for="lieuEdit">Lieu</label>
    <textarea type="text" id="lieuEdit" name ="lieu" ></textarea>
    <label for="formatEdit">Format</label>
    <textarea type="text" id="formatEdit" name ="format"></textarea>
     
    <div class="col-4 m-auto">
      <h2 class="titreH2prestation pt-5">Étiquettes</h2>
      @php
        $compteE=0;
      @endphp
      @foreach($etiquette as $et)
        @php
          $compteE++;
        @endphp
        <div> 
          <input type="checkbox" id="ett" name="ett{{$compteE}}">
          <label for="scales">{!! $et->nom!!}</label>
         
          <input type="hidden" name="etiquetteId{{$compteE}}" value="{!! $et->id!!}">
        </div>
      @endforeach
      <input type="hidden" name="compteE" value="{{$compteE}}">
    </div>
     
    <div class="col-4 m-auto">
      <h2 class="titreH2prestation pt-5">Action</h2>
      @php
        $compteA=0;
      @endphp
      @foreach($action as $act)
        @php
          $compteA++;
        @endphp
        <div> 
          <input type="checkbox" id="actt" name="actt{!! $compteA!!}">
          <label for="scales">{!! $act->nom!!}</label>
          
          <input type="hidden" name="actionId{!! $compteA!!}" value="{!! $act->id!!}">
        </div>
      @endforeach
      @foreach ($errors->all() as $error)
            <div class="Error">{{ $error }}</div>
        @endforeach
      <input type="hidden" name="compteA" value="{!! $compteA!!}">
    </div>
    <input type="submit" value="Ajouter" name ="ajouter" >
  </form>

  @if($prestation=='tout')
    <a href="{{route('AdminController.allPrestationsAdmin')}}"><h1>Revenir à toute les prestations</h1></a>
  @else
    <a href="{{route('AdminController.prestationsAdmin', ['prestation'=>$prestation])}}"><h1>Revenir à {!! $prestation!!}</h1></a>
  @endif

  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

  <script>
    CKEDITOR.replace( 'descriptionEdit', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
  </script>
  <script>
    CKEDITOR.replace( 'projetPedaEdit', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
  </script>
  <script>
    CKEDITOR.replace( 'materielEdit', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
  </script>
  <script>
    CKEDITOR.replace( 'lieuEdit', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
  </script>
  <script>
    CKEDITOR.replace( 'formatEdit', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
  </script>
@endsection