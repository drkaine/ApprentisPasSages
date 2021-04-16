@extends("templates/barre-admin")

@section("content")

    <!-- coup de coeur -->
    <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" style="box-sizing:border-box;">Coups de cœur</h1>
    </div>

    <section class="cdc">
        <div class="crud">
            <a href="{{route('AjoutController.ajoutCategorieCoup-Coeur')}}" class="fas fa-plus-circle"></a>
        </div>
        @foreach ($ccdc as $cc)
            <ul class="CategorieCoupDeCoeur">
                <li class="cdc-card">
                    <h2>{{$cc->nom}} :</h2>
                    <div class="crud">
                        <a href="{{route('EditController.editCategorieCoup-Coeur', ['idCC'=>$cc->id])}}" class="fas fa-edit"></a>
                        <a href="{{ Route('AdminController.demandeSuppression', ["choix"=>"catcdc" ,'id1'=>$cc->id,"id2"=>""]) }}" class="fas fa-minus-circle"></a>
                    </div>
                </li>
                <li>
                    <div class="crud">
                        <a href="{{route('AjoutController.ajoutCoup-Coeur', ['id'=>$cc->id])}}" class="fas fa-plus-circle"></a>
                    </div>
                    @foreach ($cdc as $c)
                        @if($c->categoriecoupsdecoeur_id==$cc->id)
                            <ul>
                                <li class="cdc-card">
                                    <a href="{!! $c->lien!!}" taget="_blank" title="{!! $c->description !!}"><i class="fa fa-heart"></i> {!! $c->nom!!}</a>
                                    <div class="crud">
                                        <a href="{{route('EditController.editCoup-Coeur', ['idCC'=>$cc->id,'idC'=>$c->id])}}" class="fas fa-edit"></a>
                                        <a href="{{ Route('AdminController.demandeSuppression', ["choix"=>"cdc" ,'id1'=>$c->id,"id2"=>""]) }}" class="fas fa-minus-circle"></a>
                                    </div>
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
