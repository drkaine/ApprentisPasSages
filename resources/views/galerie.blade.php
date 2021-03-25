
@extends("template")

@section("content")


      <!-- galerie -->
      <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" >Notre Galerie</h1>
    </div>


      <section class="galerie">
          @foreach ($albums as $album)
          <div class="item">
            <a href="{{route('TemplateController.album', ['nom'=>$album->nom])}}" class="elem">
                <img src="images/{{ $album->nom }}/1-region-sud.jpg" ></a>
            <div class="galerie-title">{{ $album->nom }}</div>
          </div>

          @endforeach


      </section>

      <div class="m-t-1 ban2">

    </div>


      @endsection



