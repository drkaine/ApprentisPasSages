
@extends("templates/barre-admin")

@section("content")


      <!-- galerie -->
      <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" >Notre Galerie</h1>
    </div>


      <section class="galerie">
        <a href="ajout" class="fas fa-plus-circle"></a>
          @foreach ($albums as $album)
          @php $nom = $album->nom;@endphp
          <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"album" ,'id1'=>$album->nom,"id2"=>""]) }}" method="post">
            {{ csrf_field() }}
            <button class="btn btn-danger">
                <i class="fas fa-minus-circle"></i>
            </button>
        </form>
          <div class="item">
            <div class="galerie-title">{{ $album->nom }}</div>            
            <a href="{{route('TemplateController.albumAdmin', ['nom'=>$album->nom])}}" class="elem">
                <img src={{ asset("storage/images/$couv[$nom]") }} ></a>
            
          </div>

          @endforeach


      </section>

      <div class="m-t-1 ban2">

    </div>


      @endsection



