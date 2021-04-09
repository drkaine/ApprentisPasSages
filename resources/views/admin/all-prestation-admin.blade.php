@extends("templates/barre-admin")

@section("content")

<div id="ban" class="container-fluid m-t-1 ban">
    
    <h1>Toutes prestations</h1>
</div>
<div class="action">
    <ul>
     <br>
     
    @php
        $compte=0;
    @endphp
<h2>Actions</h2>
        <a href="{{route('TemplateController.ajoutAction',['prestation'=>'tout'])}}" class="fas fa-plus-circle"></a>
    @foreach ($actions as $action)
    
        <li><h4>{{ $action->nom }}</h4>
             <a href="/edit" class="fas fa-edit"></a> 
            <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"action" ,"id2"=>$action->id]) }}" method="post">
                {{ csrf_field() }}
                <button class="btn btn-danger">
                    <i class="fas fa-minus-circle"></i>
                </button>
            </form><br>
            </li>
        <ul>
            
@endforeach
            <h2>Modules</h2>
    <ul>
        <a href="{{route('TemplateController.ajoutModule',['prestation'=>'tout'])}}" class="fas fa-plus-circle"></a><br>
        @foreach ($modules as $module)
            @php
                $compte++;
            @endphp
            
                <a href="{{route('TemplateController.editModule',['prestation'=>'tout','moduleId'=>$module->id])}}" class="fas fa-edit"></a>
                <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"module" ,'id1'=>$module->id,"id2"=>$action->id]) }}" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-danger">
                        <i class="fas fa-minus-circle"></i>
                    </button>
                </form>
                <li> <button type="button"  data-toggle="modal" data-target="#myModal{{$compte}}">{{ $module->nom }}</button></li>
</ul>

<!-- Modal -->
<div id="myModal{{$compte}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{ $module->nom }}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          @if ($module->img == null)
              <img src="{{asset("images/apprentispassages_logo_renard.png ")}}">
        @else
        <img src="{{asset("images/module/$module->nom.png")}}">
          @endif
          @foreach ($etiquettes as $etiquette)
        @foreach ($etiquettemodules as $etiquettemodule )
            @if ($etiquette->id == $etiquettemodule->etiquette_id and $etiquettemodule->module_id == $module->id)
            <p style="background-color:{{ $etiquette->couleur }}" >{{ $etiquette->nom }} </p>
            <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"etiquette" ,'id1'=>$etiquette->id,"id2"=>$module->id]) }}" method="post">
                {{ csrf_field() }}
                <button class="btn btn-danger">
                    <i class="fas fa-minus-circle"></i>
                </button>
            </form><br>
            @endif
        @endforeach
        @endforeach
      </div>
      <div>
            {!! ($module->description)!!}
        </div>
        <div>
            <h4>Durée du module :</h4>{{ $module->temps }}<br>
            <h4>Materiel utilisé :</h4>{!!($module->materiel)!!}<br>
            <h4>But pedagogique :</h4>{!!($module->projetPeda)!!}<br>
            <h4>Lieu :</h4>{!!($module->lieu)!!}<br>
            <h4>Format :</h4>{!! ($module->format)!!}<br>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                <ul>
                </ul><br>
            

       @endforeach
    
</div>
        <h2>Etiquettes</h2>
<a href="/ajout" class="fas fa-plus-circle"></a><br>

@foreach ($etiquettes as $etiquette)
    <a href="/edit" class="fas fa-edit"></a>
    <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"etiquette" ,'id1'=>$etiquette->id,"id2"=>$module->id]) }}" method="post">
                {{ csrf_field() }}
                <button class="btn btn-danger">
                    <i class="fas fa-minus-circle"></i>
                </button>
            </form>
    <p style="background-color:{{ $etiquette->couleur }}" >{{ $etiquette->nom }} </p>
            <br>
        @endforeach
<div class="m-t-1 ban2">
    

</div>

@endsection
