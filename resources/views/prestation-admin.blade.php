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
        <li><h4>{{ $action->nom }}
            <a href="{{ url('update/'.$catalogue->id) }}" class="fas fa-edit"></a>
            <a href="{{ url('delete/'.$catalogue->id) }}" class="fas fa-minus-circle"></a>
        <ul>
            <a href="ajout" class="fas fa-plus-circle"></a>
        @foreach ($modules as $module)
        @foreach ($module as $m)

             <li>{{ $m->nom }}</li>
             <a href="{{ url('update/'.$catalogue->id) }}" class="fas fa-edit"></a>
             <a href="{{ url('delete/'.$catalogue->id) }}" class="fas fa-minus-circle"></a>
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
