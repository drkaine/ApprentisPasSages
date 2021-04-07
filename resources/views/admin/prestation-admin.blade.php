@extends("templates/barre-admin")

@section("content")

<div id="ban" class="container-fluid m-t-1 ban">
    @foreach ($prestation as $p)
    @php $id = $p->id; @endphp
    <h1 id="titreAssociation" >{{ $p->nom }}</h1>
    @endforeach

</div>


<div class="action">
    <ul>
     </br>
     <a href="ajout" class="fas fa-plus-circle"></a>

    @foreach ($actions as $action)
        <li><h4>{{ $action->nom }}</h4>
            {{-- <a href="{{ url('update/') }}" class="fas fa-edit"></a> --}}
            <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"action" ,'id1'=>$id,"id2"=>$action->id]) }}" method="post">
                {{ csrf_field() }}
                <button class="btn btn-danger">
                    <i class="fas fa-minus-circle"></i>
                </button>
            </form><br>
            </li>
        <ul>
            <a href="ajout" class="fas fa-plus-circle"></a><br>

        @foreach ($modulesac as $moduleac)
        @foreach ($modules as $module)


            @if($moduleac->action_id == $action->id)
                @if($moduleac->module_id == $module->id)
                <a href="{{ url('update/') }}" class="fas fa-edit"></a>
                <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"module" ,'id1'=>$module->id,"id2"=>$action->id]) }}" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-danger">
                        <i class="fas fa-minus-circle"></i>
                    </button>
                </form>
                <li> <button type="button"  data-toggle="modal" data-target="#myModal">{{ $module->nom }}</button></li>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    @include("modal/modules");

  </div>
</div>
                <ul>
                </ul></br>
            @endif
            @endif


       @endforeach
        @endforeach
       </ul>
    @endforeach
    </ul>
</div>

<div class="m-t-1 ban2">

</div>

@endsection
