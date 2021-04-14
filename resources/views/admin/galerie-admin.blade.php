
@extends("templates/barre-admin")

@section("content")

  <!-- galerie -->
  <div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" >Notre Galerie</h1>
  </div>
  <div class="crud">
    <a href="{{route('TemplateController.ajoutAlbum')}}" class="fas fa-plus-circle"></a>
  </div>
  <section class="galerie">
    @foreach ($albums as $album)
      @php $nom = $album->nom;@endphp
      <div class="item">
        <div class="galerie-title">{!! $album->nom !!}</div>
        <div class="couv">        
          <a href="{{route('TemplateController.albumAdmin', ['nom'=>$album->nom])}}" class="elem">
            <img src={{ asset("storage/images/$couv[$nom]") }}>
          </a>
        </div>
      </div>
      <div class="crud">
        <a href="{{ Route('TemplateController.demandeSuppression', ["choix"=>"album" ,'id1'=>$album->nom,"id2"=>""]) }}"  class="fas fa-minus-circle"></a>
      </div>
    @endforeach
  </section>
  <div class="m-t-1 ban2"></div>
@endsection