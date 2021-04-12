<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">{{ $module->nom }}</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>

  <div class="modal-body">
    <section class = "modal-module">
      @if ($module->img == null)
        <img src="{{asset("storage/images/apprentispassages_logo_renard2.png ")}}" class="logo_m">
      @else
        <img src="{{asset("storage/images/module/$module->nom.png")}}">
      @endif
      <ul class="precision">
        <li><h4>Durée du module : {{ $module->temps }}<br></h4></li>
        <li><h4>Materiel utilisé : {{ $module->materiel }}<br></h4><li>
        <li><h4>But pedagogique : {{ $module->projetPeda }}<br></h4><li>
        <li><h4>Lieu : {{ $module->lieu }}<br></h4><li>
        <li><h4>Format : {{ $module->format }}<br></h4><li>
      </ul>
    </section>
  </div>
  <section class='etiquette'>
    @foreach ($etiquettes as $etiquette)
      @foreach ($etiquettemodules as $etiquettemodule )
        @if ($etiquette->id == $etiquettemodule->etiquette_id and $etiquettemodule->module_id == $module->id)
          <p style="background-color:{{ $etiquette->couleur }}" class ="et">{{ $etiquette->nom }} </p>
        @endif
      @endforeach
    @endforeach
  </section>

  <div>
    {{ $module->description }}
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
