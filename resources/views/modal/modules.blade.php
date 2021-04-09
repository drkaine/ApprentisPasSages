<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">{{ $module->nom }}</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>

  <div class="modal-body">
    @if ($module->img == null)
      <img src="{{asset("storage/images/apprentispassages_logo_renard.png ")}}">
    @else
      <img src="{{asset("storage/images/module/$module->nom.png")}}">
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
    {{ $module->description }}
  </div>

  <div>
    Durée du module : {{ $module->temps }}<br>
    Materiel utilisé : {{ $module->materiel }}<br>
    But pedagogique : {{ $module->projetPeda }}<br>
    Lieu : {{ $module->lieu }}<br>
    Format : {{ $module->format }}<br>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>