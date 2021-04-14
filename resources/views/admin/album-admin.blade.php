@extends("templates/barre-admin")

@section("content")

    <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" style="box-sizing:border-box;">{{$nom}} </h1>
    </div>

    <a href="{{route('TemplateController.ajoutPhoto', ["nom"=>$nom])}}" class="fas fa-plus-circle"></a>
    <section class="album">
        <div class="photo">
            @php $compte=0; @endphp
            @foreach ($photos as $photo)
                @foreach ($photo as $p) 
                    @php $compte++; @endphp
                    @if ($p->deleted_at == null)
                        <a href="{{ Route('TemplateController.demandeSuppression', ["choix"=>"photo" ,'id1'=>$p->id,"id2"=>"$nom"]) }}" class="fas fa-minus-circle"></a>
                        <div class="image">
                            <img src="{{asset("storage/images/$p->chemin ")}}" data-toggle="modal" data-target="#myModal{{$compte}}"  alt="{!! $nom !!}" class = "image">
                        </div>
                        <!-- Modal -->
                        <div id="myModal{{$compte}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                @include("modal/photo")
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </section>
    <div class="m-t-1 ban2"></div>
@endsection
