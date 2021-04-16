@extends("templates/barre-admin")

@section("content")

    <div id="ban" class="container-fluid m-t-1 ban">
        <h1>Toutes prestations</h1>
    </div>
    <section>
        <div>
            @php
                $compte=0;
            @endphp
            <div class="titre">
                <h2>Actions </h2>
                <div class="crud">
                    <a href="{{route('TemplateController.ajoutAction',['prestation'=>'tout'])}}" class="fas fa-plus-circle"></a>
                </div>
            </div>
            <ul class="action">
                @foreach ($actions as $action)
                    <li class="all-action">
                        <div>
                            <h4  class ="nom-action">{!! $action->nom !!}</h4>
                        </div>
                        <div class="crud">
                            <a href="{{route('TemplateController.editAction',['prestation'=>'tout','aid'=>$action->id])}}" class="fas fa-edit"></a> 
                            <a href="{{ Route('TemplateController.demandeSuppression', ["choix"=>"action" ,"id2"=>$action->id]) }}" class="fas fa-minus-circle"></a>
                        </div>
                    </li>            
                @endforeach
            </ul>
        </div>
    </section>
    <section>
        <div class="titre">
            <h2>Modules </h2>
            <div class="crud">
                <a href="{{route('TemplateController.ajoutModule',['prestation'=>'tout'])}}" class="fas fa-plus-circle"></a>
            </div>
        </div>
        <ul class='card-module'>
            @foreach ($modules as $module)
                @php
                    $compte++;
                @endphp
                <li class = "module">
                    @if ($module->img == null)
                        <img src="{{asset("storage/images/apprentispassages_logo_renard2.png ")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compte}}">
                    @else
                        <img src="{{asset("storage/images/module/$module->nom.png")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compte}}">
                    @endif
                    <div class="nom-modal">
                        {!! $module->nom !!}
                    </div>
                    <div class="crud">
                        <a href="{{route('TemplateController.editModule',['prestation'=>'tout','moduleId'=>$module->id])}}" class="fas fa-edit"></a>
                        <a href="{{ Route('TemplateController.demandeSuppression', ["choix"=>"module" ,'id1'=>$module->id]) }}" class="fas fa-minus-circle" ></a>
                    </div>
                </li>
                <!-- Modal -->
                <div id="myModal{{$compte}}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        @include("modal/modules")
                    </div>
                </div>
            @endforeach
        </ul>
    </section>
    <section>
        <div class="titre">
            <h2>Etiquettes </h2>
            <div class="crud">
                <a href="{{Route('TemplateController.ajoutEtiquette')}}" class="fas fa-plus-circle"></a>
            </div>
        </div>
        <article class='etiquettes'>
            @foreach ($etiquettes as $etiquette)
                <p style="background-color:{!! $etiquette->couleur !!}" class ="et">{!! $etiquette->nom !!} </p>
                <div class="crud">
                    <a href="{{Route('TemplateController.editEtiquette',['eid'=>$etiquette->id])}}" class="fas fa-edit"></a>
                    <a href="{{ Route('TemplateController.demandeSuppression', ["choix"=>"etiquette" ,'id1'=>$etiquette->id,"id2"=>$module->id]) }}" class="fas fa-minus-circle"></a>
                </div>
            @endforeach
        </article>
    </section>
    <div class="m-t-1 ban2"></div>
@endsection
