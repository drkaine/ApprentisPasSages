@extends("barre-admin")

@section("content")

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">Etes vous sur de vouloir supprimer ? </h1>
</div>

{{-- <form method="POST" action="accueil-admin"> --}}
     <form action="{{ url('accueil-admin/'.$id) }}" method="post">
                {{ csrf_field() }}
                {!! method_field('DELETE') !!}
                <button> Valider</button>
            </form>

    <button> Annuler</button>
  {{-- </form> --}}

<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
        @endsection
