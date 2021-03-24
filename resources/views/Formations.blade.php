@extends("template")

@section("content")

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" >Formations</h1>
</div>
    <ul class="catalogue">
    @foreach ($catalogues as $cat)
        <li>{{$cat}}</li>

    @endforeach
    </ul>
<div class="m-t-1 ban2">

</div>

@endsection
