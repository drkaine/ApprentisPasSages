@extends('templates/template')

@section("content")

  <div id="ban" class="container-fluid m-t-1 ban">
      <h1 id="titreAssociation" style="box-sizing:border-box;">{!! $membre->prenom!!} {!! $membre->nom!!}</h1>
  </div>
  
  <section class="one-membre">
    <section class="membre">
      <div class="image-membre">
        @if($membre->photo == null)
          <div>
          @php
                $compte=0;
            @endphp
          @foreach ($photos as $p)
            @php
                $compte++;
            @endphp
              <input type="checkbox" id="catt{!! $compte !!}" name="img">
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
          <img class="imageOneTeam" src="{{asset("storage/images/team/$membre->photo")}}" alt="photo de {!! $membre->nom!!} {!! $membre->prenom!!} de l'association ApprentiPasSage">
        @endif
      </div>
      <div >
        <h2 class="membre-ecrit">&Agrave;  propos de moi:</h2>
        <div class="membre-ecrit">{!!$membre->description!!}</div>
      </div>
    </section>
    <section class="membre">
      <div class="role-membre">
        <h2>Rôle dans l'association</h2>
        @foreach($membre->getStatus()->get() as $statut)
          <h3 class="membre-ecrit">{!! $statut->nom!!}<br></h3>
        @endforeach
      </div>
      <div class="membre-ecrit">
        <h2 class="membre-ecrit">Me contacter:</h2>
        <h3 class="membre-ecrit">{!! $membre->telephone !!}</h3>
        <h3 class="membre-ecrit">{!! $membre->email!!}</h3>
      </div>
    </section>
  </section>
  <div class="m-t-1 ban2"></div>
@endsection