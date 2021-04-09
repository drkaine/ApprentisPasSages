@extends("templates/barre-admin")

@section("content")

    <!-- coup de coeur -->
    <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" style="box-sizing:border-box;">Coups de cœur</h1>
    </div>

    <section class="cdc">
        <a href="{{route('TemplateController.ajoutCategorieCoup-Coeur')}}" class="fas fa-plus-circle"></a>
        @foreach ($ccdc as $cc)
            <ul class="CategorieCoupDeCoeur">
                <li>
                    <a href="{{route('TemplateController.editCategorieCoup-Coeur', ['idCC'=>$cc->id])}}" class="fas fa-edit"></a>
                    <a href="{{ url('delete/'.$cc->id) }}" class="fas fa-minus-circle"></a>
                    
                    <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"catcdc" ,'id1'=>$cc->id,"id2"=>""]) }}" method="post">
                        {{ csrf_field() }}
                        <button class="btn btn-danger">
                            <i class="fas fa-minus-circle"></i>
                        </button>
                    </form>
                    
                    <h2>{{$cc->nom}} :</h2>
                    <a href="{{route('TemplateController.ajoutCoup-Coeur', ['id'=>$cc->id])}}" class="fas fa-plus-circle"></a>
                    @foreach ($cdc as $c)
                        @if($c->categoriecoupsdecoeur_id==$cc->id)
                            <ul>
                                <li>
                                    <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"cdc" ,'id1'=>$c->id,"id2"=>""]) }}" method="post">
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger">
                                            <i class="fas fa-minus-circle"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('TemplateController.editCoup-Coeur', ['idCC'=>$cc->id,'idC'=>$c->id])}}" class="fas fa-edit"></a>
                                    <a href="{{$c->lien}}" taget="_blank" title="{{$c->description}}"> {{$c->nom}}</a>
                                </li>
                            </ul>
                        @endif
                    @endforeach

                </li>
            </ul>
        @endforeach
    </section>
    <div class="m-t-1 ban2"> </div>
@endsection
