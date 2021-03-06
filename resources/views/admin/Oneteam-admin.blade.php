@extends('templates/barre-admin')

@section("content")
  <form action="" method="post">
    {{ csrf_field() }}
    {!! method_field('PUT') !!}
    <input type="hidden" name="membres" value="Yes">
    <input type="hidden" name="id" value="{{ $membre->id }}">
      
    <label for="prenomEdit">Prenom</label>
    <input type="text" id="prenomEdit" name ="prenom" value="{!!$membre->prenom!!}">

    <label for="nomEdit">Nom</label>
    <input type="text" id="nomEdit" name ="nom" value="{!!$membre->nom!!}">

    <section class="membre">
      <div class="row">
        <div class="col-3 p-auto">
          @if($membre->photo == null)
            <div>
              @php
                $compte=0;
              @endphp
              @foreach ($photos as $p)
                @php
                    $compte++;
                @endphp
                <input type="checkbox" id="photo{!! $compte !!}" name="img" value="{{$p->chemin}}">
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
          @else
            <img class="imageOneTeam" src="{{asset("storage/images/$membre->photo")}}" alt="photo de {{$membre->nom}} {{$membre->prenom}} de l'association ApprentiPasSage">
          @endif
        </div>
      </div>
    </section>

    <label for="photoEdit">photo</label>
    <textarea id="photoEdit" name ="photo" value="{!!$membre->photo!!}" >
        {!!$membre->photo!!}
    </textarea>

    <label for="descriptionEdit">description</label>
    <textarea id="descriptionEdit" name ="description" value="{!!$membre->description!!}">
      <div class="pl-5">{!!$membre->description!!}</div>
    </textarea>

    <label for="telephoneEdit">telephone</label>
    <input type="tel" id="telephoneEdit" name ="telephone" value="{!!$membre->telephone!!}">

    <label for="emailEdit">email</label>
    <input type="email" id="emailEdit" name ="email" value="{!!$membre->email!!}">
    @foreach ($errors->all() as $error)
            <div class="Error">{{ $error }}</div>
        @endforeach
    <input type="submit" value="Editer" name ="edito" >
  </form>

  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

  <script>
    CKEDITOR.replace( 'descriptionEdit', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
  </script>
  <script>
    CKEDITOR.replace( 'photoEdit', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
  </script>

  <form action="" method="post">
    {{ csrf_field() }}
    {!! method_field('PUT') !!}
    <input type="hidden" name="membresStatuts" value="Yes">
    <div class="col-4 m-auto">
      <h2 class="titreH2prestation pt-5">R??le(s) dans l'association</h2>
      @php
          $compte=0;
      @endphp
      @foreach($statut as $stattu)
        @php
          $compte++;
        @endphp
        <div>

          <input type="checkbox" id="statt" name="statt{{$compte}}"
          @foreach($membreStatut as $mStatut)
            @if($stattu->id==$mStatut->statut_id and $membre->id==$mStatut->membre_id )
              checked
            @endif
          @endforeach
          >
          <label for="scales">{!! $stattu->nom !!}</label>

          <input type="hidden" name="statutId{{$compte}}" value="{!! $stattu->id!!}">
          <input type="hidden" name="membreId" value="{!! $membre->id !!}">
        </div>
      @endforeach
      <input type="hidden" name="compte" value="{{$compte}}">
    </div>

    <input type="submit" value="Editer" name ="edito" >
  </form>

  <a href="{{route('Accueil-Admin')}}"><h1>Revenir ?? Accueil</h1></a>
  <div class="m-t-1 ban2"></div>
@endsection
