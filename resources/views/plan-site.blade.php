@extends("templates/template")

@section("content")

  <body>
    <div id="ban" class="container-fluid m-t-1 ban">
      <h1 id="titreAssociation" style="box-sizing:border-box;">Plan du site</h1>
    </div>
    <div>
      <a href="/">Accueil</a>
      <ul class="plan-site">
        <li>
          <a href="/association">Qui sommes-nous ?</a>
        </li>
        <li>
          <a href="/coup-coeur">Coups de coeur</a>
        </li>
        <li>
          oneTeam
          <ul class="plan-site">
            @foreach ($team as $membre)
              <li>
                <a href="{{route('VisiteurController.getOneteam', ['id'=>$membre->id])}}">{!! $membre->nom !!} {!!$membre->prenom !!}</a>
              </li>
            @endforeach
          </ul>
        </li>
        <li>
          <a href="/galerie">Galerie</a>
          <ul class="plan-site">
            <li>
              Album
              <ul class="plan-site">
                @foreach ($albums as $album)
                    @if ($album->nom != "partenaires" and $album->nom != "team")
                      <li>
                        <a href="{{route('VisiteurController.album', ['nom'=>$album->nom])}}">{!! $album->nom !!}</a>
                      </li>
                    @endif
                @endforeach
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Prestation
          <ul class="plan-site">
            @foreach ($catalogues as $catalogue)
              <li>
                <a href="{{route('VisiteurController.prestations', ['prestation'=>$catalogue->nom])}}">{{ $catalogue->nom}}</a>
              </li>
            @endforeach
          </ul>
        </li>
      </ul>
    </div>
  </body>
  <div class="m-t-1 ban2"></div>
@include("templates/footer")
@endsection