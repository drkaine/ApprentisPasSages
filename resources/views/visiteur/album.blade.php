
@extends("templates/template")

@section("content")
<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">{{$nom}} </h1>
</div>
      <!-- galerie -->
        <section class="album">
            <div class="photo">

                @foreach ($photos as $photo)
                @foreach ($photo as $p)
                @if ($p->deleted_at == null)
                <div class="image">
                    <img src="{{asset("storage/images/$p->chemin ")}}" alt="{{$p->chemin}}" class = "image">
                </div>
                @endif
                @endforeach


                @endforeach
                </div>
        </section>
<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
        @endsection
