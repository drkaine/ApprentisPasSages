
@extends("barre-admin")

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
            <a href="{{ url('delete/') }}" class="fas fa-minus-circle"></a>
            <a href="{{route('TemplateController.albumAdmin', ['nom'=>$album->nom])}}" class="elem">
                <img src="images/{{ $album->nom }}/1-region-sud.jpg" ></a>
            <div class="galerie-title">{{ $album->nom }}</div>
          </div>

          @endforeach


      </section>

      <div class="m-t-1 ban2">

    </div>


      @endsection



