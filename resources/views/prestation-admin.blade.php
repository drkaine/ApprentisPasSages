@extends("barre-admin")

@section("content")

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" >{{ $prestation }}</h1>
</div>


<div class="action">
    <ul>
     </br>
     <a href="ajout" class="fas fa-plus-circle"></a>
    @foreach ($actions as $action)
        <li><h4>{{ $action->nom }}</h4>
            {{-- <a href="{{ url('update/') }}" class="fas fa-edit"></a> --}}
            <form action="{{ url('/actionDelete'.$prestation) }}" method="post">
                {{ csrf_field() }}
                {!! method_field('DELETE') !!}
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
                <li>{{ $module->nom }}</li>
                <a href="{{ url('update/') }}" class="fas fa-edit"></a>
                <form action="{{ url('/moduleDelete'.$module->id) }}" method="post">
                 {{ csrf_field() }}
                    {!! method_field('DELETE') !!}
                    <button class="btn btn-danger">
                        <i class="fas fa-minus-circle"></i>
                    </button>
                </form>
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
