@extends("templates/barre-admin")

@section("content")

    <div id="ban" class="container-fluid m-t-1 ban">
        @foreach ($prestation as $p)
            @php $id = $p->id; @endphp
            <h1 id="titreAssociation" >{{ $p->nom }}</h1>
    </div>

    <div class="action">
        <ul></br>
            <a href="{{route('TemplateController.ajoutAction',['prestation'=>$p->nom])}}" class="fas fa-plus-circle"></a>
            @php $compte=0;@endphp
        @endforeach
        
            @foreach ($actions as $action)
                <li><h4>{{ $action->nom }}</h4>
                    <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"action" ,'id1'=>$id,"id2"=>$action->id]) }}" method="post">
                        {{ csrf_field() }}
                        <button class="btn btn-danger">
                            <i class="fas fa-minus-circle"></i>
                        </button>
                    </form><br>
                </li>
                <ul>
                    <a href="{{route('TemplateController.ajoutModule',['prestation'=>$p->nom])}}" class="fas fa-plus-circle"></a><br>
                    @foreach ($modulesac as $moduleac)
                        @foreach ($modules as $module)
                            @php $compte++;@endphp
                            @if($moduleac->action_id == $action->id)
                                @if($moduleac->module_id == $module->id)
                                    <a href="{{route('TemplateController.editModule',['prestation'=>$p->nom,'moduleId'=>$module->id])}}" class="fas fa-edit"></a>
                                    <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"module" ,'id1'=>$module->id,"id2"=>$action->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger">
                                            <i class="fas fa-minus-circle"></i>
                                        </button>
                                    </form>
                                    <li> <button type="button"  data-toggle="modal" data-target="#myModal{{$compte}}">{{ $module->nom }}</button></li>
                                    <!-- Modal -->
                                    <div id="myModal{{$compte}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{ $module->nom }}</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <div class="modal-body">
                                                    @if ($module->img == null)
                                                        <img src="{{asset("storage/images/apprentispassages_logo_renard.png ")}}">
                                                    @else
                                                        <img src="{{asset("storage/images/module/$module->nom.png")}}">
                                                    @endif
                                                    @foreach ($etiquettes as $etiquette)
                                                        @foreach ($etiquettemodules as $etiquettemodule )
                                                            @if ($etiquette->id == $etiquettemodule->etiquette_id and $etiquettemodule->module_id == $module->id)
                                                                <p style="background-color:{{ $etiquette->couleur }}" >{{ $etiquette->nom }} </p>
                                                                <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"etiquette" ,'id1'=>$etiquette->id,"id2"=>$module->id]) }}" method="post">
                                                                    {{ csrf_field() }}
                                                                    <button class="btn btn-danger">
                                                                        <i class="fas fa-minus-circle"></i>
                                                                    </button>
                                                                </form><br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </div>

                                                <div>
                                                    {!! ($module->description)!!}
                                                </div>

                                                <div>
                                                    <h4>Durée du module :</h4>{{ $module->temps }}<br>
                                                    <h4>Materiel utilisé :</h4>{!!($module->materiel)!!}<br>
                                                    <h4>But pedagogique :</h4>{!!($module->projetPeda)!!}<br>
                                                    <h4>Lieu :</h4>{!!($module->lieu)!!}<br>
                                                    <h4>Format :</h4>{!! ($module->format)!!}<br>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            @endforeach
        </ul>
    </div>
    <div class="m-t-1 ban2"></div>
@endsection
