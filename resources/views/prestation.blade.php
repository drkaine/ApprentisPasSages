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
       
        @foreach ($modules as $module)
        @foreach ($module as $m)
             <li>{{ $m->nom }}</li></br>
            <ul>
       </ul></br>
        @endforeach
            
        @endforeach
       </ul>
    @endforeach
    </ul>
</div>

<div class="m-t-1 ban2">

</div>

@endsection
