@extends("templates/barre-admin")

@section("content")

    <div id="ban" class="container-fluid m-t-1 ban">
        <h1>Toutes prestations</h1>
    </div>
    <section>
        <div class="action">
            @php
                $compte=0;
            @endphp
            <h2>Actions  <a href="{{route('TemplateController.ajoutAction',['prestation'=>'tout'])}}" class="fas fa-plus-circle"></a></h2>
            <ul>
                @foreach ($actions as $action)
                    <li>
                        <a href="{{route('TemplateController.editAction',['prestation'=>'tout','aid'=>$action->id])}}" class="fas fa-edit"></a> 
                        <a href="{{ Route('TemplateController.demandeSuppression', ["choix"=>"action" ,"id2"=>$action->id]) }}" class="fas fa-minus-circle"></a>
                        <h4>{{ $action->nom }}</h4>
                    </li>            
                @endforeach
            </ul>
        </div>
    </section>
    <section>
        <h2>Modules <a href="{{route('TemplateController.ajoutModule',['prestation'=>'tout'])}}" class="fas fa-plus-circle"></a></h2>
        <ul>
            @foreach ($modules as $module)
                @php
                    $compte++;
                @endphp
                <li>
                    @if ($module->img == null)
                        <img src="{{asset("storage/images/apprentispassages_logo_renard2.png ")}}" class="miniature-module">
                    @else
                        <img src="{{asset("storage/images/module/$module->nom.png")}}">
                    @endif
                    <a href="{{route('TemplateController.editModule',['prestation'=>'tout','moduleId'=>$module->id])}}" class="fas fa-edit"></a>
                    <a href="{{ Route('TemplateController.demandeSuppression', ["choix"=>"module" ,'id1'=>$module->id,"id2"=>$action->id]) }}" class="fas fa-minus-circle"></a>
                    <button type="button"  data-toggle="modal" data-target="#myModal{{$compte}}">{{ $module->nom }}</button>
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
        <h2>Etiquettes <a href="{{Route('TemplateController.ajoutEtiquette')}}" class="fas fa-plus-circle"></a></h2>
        <article class='etiquettes'>
            @foreach ($etiquettes as $etiquette)
                <p style="background-color:{{ $etiquette->couleur }}" class ="et">{{ $etiquette->nom }} </p>
                <a href="{{Route('TemplateController.editEtiquette',['eid'=>$etiquette->id])}}" class="fas fa-edit"></a>
                <a href="{{ Route('TemplateController.demandeSuppression', ["choix"=>"etiquette" ,'id1'=>$etiquette->id,"id2"=>$module->id]) }}" class="fas fa-minus-circle"></a>
            @endforeach
        </article>
    </section>
    <div class="m-t-1 ban2"></div>
@endsection
