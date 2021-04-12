@extends('templates/template')

@section("content")

  <div id="ban" class="container-fluid m-t-1 ban">
      <h1 id="titreAssociation" style="box-sizing:border-box;">{{$membre->prenom}} {{ $membre->nom}}</h1>
  </div>
  
  <section class="one">
    <section class="membre">
      <div class="row">
        <div class="col-3 p-auto">
          @if($membre->photo == null)
            <img class="imageOneTeam" src=" {{asset("storage/images/team/apprentispassages_logo_renard.png") }} " alt="photo de l'avatar de l'association ApprentiPasSage">
          @else
            <img class="imageOneTeam" src="{{asset("storage/images/team/$membre->photo")}}" alt="photo de {{$membre->nom}} {{$membre->prenom}} de l'association ApprentiPasSage">
          @endif
        </div>
        
        <div class="col-5"></div>

        <div class="col-4 m-auto">
          <h2 class="titreH2prestation pt-5">Rôle dans l'association</h2>
          @foreach($membre->getStatus()->get() as $statut)
            <h3 class="titreH3prestation">{{$statut->nom}}<br></h3>
          @endforeach
        </div>
      </div>
    </section>

    <div class="row">
      <div class="col-12 col-sm-8 mt-3 mb-3">
        <h2 class="titreH2prestation pl-3">&Agrave;  propos de moi:</h2>
        <div class="pl-5">{!!$membre->description!!}</div>
      </div>

      <div class="col-12 col-sm-4 border-left border-warning m-auto">
        <h2 class="titreH2prestation">Me contacter:</h2>
        <h3 class="titreH3prestation">{{$membre->telephone}}</h3>
        <h3 class="titreH3prestation">{{$membre->email}}</h3>
      </div>
    </div>
  </section>
    <div class="m-t-1 ban2"></div>
@endsection
