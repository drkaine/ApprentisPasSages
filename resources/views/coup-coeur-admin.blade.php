@extends("barre-admin")

@section("content")
<!-- coup de coeur -->

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">Coups de cœur</h1>
</div>
<section>
    <a href="ajout" class="fas fa-plus-circle"></a>

         @foreach ($ccdc as $cc)
        <ul class="CategorieCoupDeCoeur">
            <li>
                <a href="{{ url('update/'.$cc->id) }}" class="fas fa-edit"></a>
            <a href="{{ url('delete/'.$cc->id) }}" class="fas fa-minus-circle"></a>
                <h2>{{$cc->nom}} :</h2>

                <a href="ajout" class="fas fa-plus-circle"></a>



                    @foreach ($cdc as $c)
                    @if($c->categoriecoupsdecoeur_id==$cc->id)
                <ul>
                    <li>
                        <a href="{{ url('update/'.$c->categoriecoupsdecoeur_id->id) }}" class="fas fa-edit"></a>
                        <a href="{{ url('delete/'.$c->categoriecoupsdecoeur_id->id) }}" class="fas fa-minus-circle"></a>
                       <a href="{{$c->lien}}" taget="_blank" title="{{$c->description}}"> {{$c->nom}}</a>
                    </li>
                </ul>
                    @endif
                    @endforeach

            </li>
        </ul>
            @endforeach

    </section>
    <div class="m-t-1 ban2">

    </div>
    @endsection
