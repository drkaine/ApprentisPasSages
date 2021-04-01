@extends("template")

@section("content")

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" >{{ $prestation }}</h1>
</div>

<div class="action">
    <ul>
     </br>
    @foreach ($actions as $action)

        <li><h4>{{ $action->nom }}</h4></li></br>
        <ul>

            @foreach ($modulesac as $moduleac)
            @foreach ($modules as $module)


                @if($moduleac->action_id == $action->id)
                    @if($moduleac->module_id == $module->id)
                    <li>{{ $module->nom }}</li>
                    <ul>
                    </ul></br>
                @endif
                @endif
                @endforeach
                @endforeach
    @endforeach
    </ul>
</div>

<div class="m-t-1 ban2">

</div>

@endsection
