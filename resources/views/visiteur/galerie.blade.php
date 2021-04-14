@extends("templates/template")

@section("content")
  <!-- galerie -->
  <div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" >Notre Galerie</h1>
  </div>
  <section class="galerie">
      @foreach ($albums as $album)
        @php $nom = $album->nom;@endphp
        @if ($album->nom != "partenaires" and $album->nom != "team")
        <div class="item">
          <div class="galerie-title">{!! $album->nom !!}</div>
          <div class="couv">
            <a href="{{route('TemplateController.album', ['nom'=>$album->nom])}}" class="elem">
              <img src={{ asset("storage/images/$couv[$nom]")}} >
            </a>
          </div>
        </div>
        @endif
      @endforeach
  </section>
  <div class="m-t-1 ban2"></div>
@endsection



