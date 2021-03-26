@extends("template")

@section("content")

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" >{{ $prestation }}</h1>
</div>

<div class="action">
    <ul>
        {{-- {{ var_dump($actions) }} --}}
    @foreach ($actions as $action)
        <li>{{ $action->nom }}</li></br>
        {{-- {{ var_dump($action) }} --}}
    @endforeach
    </ul>
</div>

<div class="m-t-1 ban2">

</div>

@endsection
