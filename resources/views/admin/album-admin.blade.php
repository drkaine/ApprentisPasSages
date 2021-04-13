@extends("templates/barre-admin")

@section("content")

    <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" style="box-sizing:border-box;">{{$nom}} </h1>
    </div>

    <a href="{{route('TemplateController.ajoutPhoto', ["nom"=>$nom])}}" class="fas fa-plus-circle"></a>
    <section class="album">
        <div class="photo">
            @foreach ($photos as $photo)
                @foreach ($photo as $p) 
                    @if ($p->deleted_at == null)
                        <a href="{{ Route('TemplateController.demandeSuppression', ["choix"=>"photo" ,'id1'=>$p->id,"id2"=>"$nom"]) }}" class="fas fa-minus-circle"></a>
                        <div class="image">
                            <img src="{{asset("storage/images/$p->chemin ")}}" alt="{{ $nom }}" class = "image">
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </section>

    <section id="coupDeCoeur" class ="cdc">
        <div class="m-t-1 ban2"></div>
    </section>
@endsection
