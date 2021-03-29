
@extends("barre-admin")

@section("content")
<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">{{$nom}} </h1>
</div>
      <!-- galerie -->
      <i class="fas fa-plus-circle"></i>
        <section class="album">
            <div class="row">
                @foreach ($photos as $photo)
                @foreach ($photo as $p)
                <i class="fas fa-minus-circle"></i>
                    <img src="{{asset("images/$p->chemin ")}}">
                @endforeach
                @endforeach
        </section>
<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
        @endsection
