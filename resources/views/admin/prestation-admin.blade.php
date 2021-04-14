@extends("templates/barre-admin")

@section("content")

    <div id="ban" class="container-fluid m-t-1 ban">
        @foreach ($prestation as $p)
            @php $id = $p->id; @endphp
            <h1 id="titreAssociation" >{{ $p->nom }}</h1>
    </div>

    <div class="prestation-card">
        <div class="crud">
            <a href="{{route('TemplateController.ajoutAction',['prestation'=>$p->nom])}}" class="fas fa-plus-circle"></a>
        </div>
        <ul class ="listing-prestation">
            @php $compte=0;@endphp
        @endforeach
        
            @foreach ($actions as $action)
                <li class="titre">
                    <h4 class ="nom-action">{{ $action->nom }}</h4>
                    <div class="crud">
                        <a href="{{ Route('TemplateController.demandeSuppression', ["choix"=>"action" ,'id1'=>$id,"id2"=>$action->id]) }}" class="fas fa-minus-circle"></a>
                    </div>
                </li>
                <div class="crud">
                    <a href="{{route('TemplateController.ajoutModule',['prestation'=>$p->nom])}}" class="fas fa-plus-circle"></a><br>
                </div>
                <ul class="card-module">
                    @foreach ($modulesac as $moduleac)
                        @foreach ($modules as $module)
                            @php $compte++;@endphp
                            @if($moduleac->action_id == $action->id)
                                @if($moduleac->module_id == $module->id)
                                    <li class = "module">
                                        @if ($module->img == null)
                                            <img src="{{asset("storage/images/apprentispassages_logo_renard2.png ")}}" class="miniature-module"  data-toggle="modal" data-target="#myModal{{$compte}}">
                                        @else
                                            <img src="{{asset("storage/images/module/$module->nom.png")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compte}}">
                                        @endif
                                        <div class="nom-modal">
                                            {{ $module->nom }}
                                        </div>
                                        <div class="crud">
                                            <a href="{{route('TemplateController.editModule',['prestation'=>$p->nom,'moduleId'=>$module->id])}}" class="fas fa-edit"></a>
                                            <a href="{{ Route('TemplateController.demandeSuppression', ["choix"=>"module" ,'id1'=>$module->id,"id2"=>$action->id]) }}" class="fas fa-minus-circle"></a>
                                        </div>
                                    </li>
                                    <!-- Modal -->
                                    <div id="myModal{{$compte}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                           @include("modal/modules")
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
