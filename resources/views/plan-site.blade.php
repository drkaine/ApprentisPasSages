@extends("templates/template")

@section("content")

  <body>
    <div id="ban" class="container-fluid m-t-1 ban">
      <h1 id="titreAssociation" style="box-sizing:border-box;">Plan du site</h1>
    </div>
    <div>
        <a href="/">Accueil</a>
        <a href="/association">Qui sommes-nous ?</a>
        <a href="/coup-coeur">Coups de coeur</a>
        <a href="/">oneTeam</a>
        @foreach ($team as $membre)
            <a href="{{route('TemplateController.getOneteam', ['id'=>$membre->id])}}">{!! $membre->nom !!} {!!$membre->prenom !!}</a>
        @endforeach
        <a href="/galerie">Galerie</a>
        <a href="/galerie">Album</a>
        @foreach ($albums as $album)
            @if ($album->nom != "partenaires" and $album->nom != "team")
                <a href="{{route('TemplateController.album', ['nom'=>$album->nom])}}">{!! $album->nom !!}</a>
            @endif
        @endforeach
        <a href="/">Prestation</a>
        @foreach ($catalogues as $catalogue)
          <a href="{{route('TemplateController.prestations', ['prestation'=>$catalogue->nom])}}">{{ $catalogue->nom}}</a>
      @endforeach
  </body>
  <div class="m-t-1 ban2"></div>
@include("templates/footer")
@endsection