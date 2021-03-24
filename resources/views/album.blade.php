
@extends("template")

@section("content")
<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">{{$nom}} </h1>
</div>
      <!-- galerie -->
        <section class="album">
            <div class="row">
                <div class="column">
                @foreach ($photos as $photo)
                    <img src="images/{{ $photo->chemin }}">

                @endforeach
                </div>
        </section>
<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
        @endsection
