@extends("template")

@section("content")
<!-- coup de coeur -->

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">Coups de cœur</h1>
</div>
<section>

         @foreach ($ccdc as $cc)
        <ul class="CategorieCoupDeCoeur">
            <li>
                <h2>{{$cc->nom}} :</h2>


                    @foreach ($cdc as $c)
                    @if($c->categoriecoupsdecoeur_id==$cc->id)
                <ul>
                    <li>
                       <a href="{{$c->lien}}"> {{$c->nom}}</a>{{$c->description}}
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
