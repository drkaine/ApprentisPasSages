@extends("barre-admin")

@section("content")
<!-- coup de coeur -->

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">Coups de cœur</h1>
</div>
<section>
    <i class="fas fa-plus-circle"></i>

         @foreach ($ccdc as $cc)
        <ul class="CategorieCoupDeCoeur">
            <li>
                <i class="fas fa-edit"></i>
                <i class="fas fa-minus-circle"></i>
                <h2>{{$cc->nom}} :</h2>

            <i class="fas fa-plus-circle"></i>



                    @foreach ($cdc as $c)
                    @if($c->categoriecoupsdecoeur_id==$cc->id)
                <ul>
                    <li>
                        <i class="fas fa-edit"></i>
                <i class="fas fa-minus-circle"></i>
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
