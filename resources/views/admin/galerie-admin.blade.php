
@extends("templates/barre-admin")

@section("content")


      <!-- galerie -->
      <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" >Notre Galerie</h1>
    </div>


      <section class="galerie">
        <a href="ajout" class="fas fa-plus-circle"></a>
          @foreach ($albums as $album)
          <div class="item">
            <a href="{{ url('update/') }}" class="fas fa-edit"></a>
            <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"album" ,'id1'=>$album->nom,"id2"=>""]) }}" method="post">
                {{ csrf_field() }}
                <button class="btn btn-danger">
                    <i class="fas fa-minus-circle"></i>
                </button>
            </form>
            <a href="{{route('TemplateController.albumAdmin', ['nom'=>$album->nom])}}" class="elem">
                <img src={{ asset("storage/images/$album->nom/1-region-sud.jpg") }} ></a>
            <div class="galerie-title">{{ $album->nom }}</div>
          </div>

          @endforeach


      </section>

      <div class="m-t-1 ban2">

    </div>


      @endsection



