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
              @if($couv[$nom] == null)
                <img src={{ asset("storage/images/apprentispassages_logo_renard2.png")}} alt="logo">
              @else
                <img src={{ asset("storage/images/$couv[$nom]")}} alt="{!! $nom !!}">
              @endif
            </a>
          </div>
        </div>
        @endif
      @endforeach
  </section>
  <div class="m-t-1 ban2"></div>
@endsection



