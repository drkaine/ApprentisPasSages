<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">{!! $module->nom !!}</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>

  <div class="modal-body">
    <section class = "modal-module">
      @if ($module->img == null)
        <img src="{{asset("storage/images/apprentispassages_logo_renard2.png ")}}" class="logo_m" alt='logo module'>
      @else
        <img src="{{asset("storage/images/$module->img")}}" class="logo_m" alt="{!! $module->nom !!}">
      @endif
      <ul class="precision">
        <li><h4>Durée du module :<br></h4> {!! $module->temps !!}</li>
        <li><h4>Materiel utilisé : <br></h4>{!! $module->materiel !!}<li>
        <li><h4>But pedagogique :<br></h4> {!! $module->projetPeda !!}<li>
        <li><h4>Lieu : <br></h4>{!! $module->lieu !!}<li>
        <li><h4>Format : <br></h4>{!! $module->format !!}<li>
      </ul>
    </section>
  </div>
  <section class='etiquette'>
    @foreach ($etiquettes as $etiquette)
          @foreach ($etiquettemodules as $etiquettemodule )
            @if ($etiquette->id == $etiquettemodule->etiquette_id and $etiquettemodule->module_id == $module->id)
              <p style="background-color:{!! $etiquette->couleur !!}" class ="et" >
                {!! $etiquette->nom !!} 
              </p>
              <div class="crud">
                <a href="{{ Route('AdminController.demandeSuppression', ["choix"=>"etiquette" ,'id1'=>$etiquette->id,"id2"=>$module->id]) }}"  class="fas fa-minus-circle"></a>
              </div>
            @endif
          @endforeach
        @endforeach
  </section>
  <div class = "desc">
    {!! $module->description !!}
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>