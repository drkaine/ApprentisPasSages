@extends("templates/barre-admin")

@section("content")

    <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" style="box-sizing:border-box;">Gestionnaire des utilisateurs </h1>
    </div>
    <div class="crud">
        <a href="{{route('AjoutController.ajoutAdmin')}}" class="fas fa-plus-circle"></a>
    </div>
    @foreach ($users as $user)
        {!! $user->email !!} {!! $user->nom !!}
        <div class="crud">        
            <a href="{{route('EditController.editAdmin', ["eid"=>$user->id])}}" class="fas fa-edit"></a>
            <a href="{{route('AdminController.demandeSuppression', ["choix"=>"user", "id1"=>$user->id])}}" class="fas fa-minus-circle"></a>
        </div>
    @endforeach    
    <div class="m-t-1 ban2"></div>
@endsection
