
@extends("template-admin")

@section("content")


      <!-- galerie -->
      <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" >Notre Galerie</h1>
    </div>


      <section class="galerie">
        <i class="fas fa-plus-circle"></i>
          @foreach ($albums as $album)
          <div class="item">
            <i class="fas fa-edit"></i>
            <i class="fas fa-minus-circle"></i>
            <a href="{{route('TemplateController.albumAdmin', ['nom'=>$album->nom])}}" class="elem">
                <img src="images/{{ $album->nom }}/1-region-sud.jpg" ></a>
            <div class="galerie-title">{{ $album->nom }}</div>
          </div>

          @endforeach


      </section>

      <div class="m-t-1 ban2">

    </div>


      @endsection



