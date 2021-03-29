@extends("template-admin")

@section("content")

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" >{{ $prestation }}</h1>
</div>

<div class="action">
    <ul>
     </br>
     <i class="fas fa-plus-circle"></i>
    @foreach ($actions as $action)
        <li><h4>{{ $action->nom }}
            <i class="fas fa-edit"></i>
            <i class="fas fa-minus-circle"></i></h4></li>
        <ul>
            <i class="fas fa-plus-circle"></i></br>
        @foreach ($modules as $module)
        @foreach ($module as $m)

             <li>{{ $m->nom }}</li>
             <i class="fas fa-edit"></i>
             <i class="fas fa-minus-circle"></i></br>
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
