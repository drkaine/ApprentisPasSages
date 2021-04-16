@extends("templates/barre-admin")

@section("content")

    <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" style="box-sizing:border-box;">Etes vous sur de vouloir supprimer ? </h1>
    </div>

    <form action="{{ Route('DeleteController.confirmationSuppression', ["choix"=>$choix, "id1"=>$id1, "id2"=>$id2]) }}" method="post">
        {{ csrf_field() }}
        {!! method_field('DELETE') !!}
        <button> Valider</button>
    </form>

    <form action="{{ Route('AdminController.retour', ["choix"=>$choix, "id1"=>$id1, "id2"=>$id2]) }}"  method="post">
        {{ csrf_field() }}
        <button> Annuler</button>
    </form>

    <div class="m-t-1 ban2"></div>
@endsection