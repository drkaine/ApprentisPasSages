@extends("templates/barre-admin")

@section("content")

    <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" style="box-sizing:border-box;">Gestionnaire des utilisateurs </h1>
    </div>
    <div class="crud">
        <a href="{{route('AjoutController.ajoutAdmin')}}" class="fas fa-plus-circle"></a>
    </div>
    <div class="crud">        
        <a href="{{route('EditController.editAdmin')}}" class="fas fa-edit"></a>
        <a href="{{route('AdminController.demandeSuppression', ["choix"=>"user"])}}" class="fas fa-minus-circle"></a>
    </div>
    
    <div class="m-t-1 ban2"></div>
@endsection
