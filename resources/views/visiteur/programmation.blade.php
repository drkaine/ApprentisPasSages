

<div>
    @foreach($action as $act)

        @if($act->id==$cProg->action_id)
        <h4>{{$act->nom}}</h4><br>

       @endif
   @endforeach
</div>
   <div>
       <div>

                @foreach($module as $mod)
                     @if($mod->id==$cProg->module_id)

                        <button type="button"  data-toggle="modal" data-target="#modul">{{ $mod->nom }}</button><br>


<!-- Modal -->
<div id="modul" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{ $mod->nom }}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          @if ($mod->img == null)
              <img src="{{asset("storage/images/apprentispassages_logo_renard.png ")}}">
        @else
        <img src="{{asset("storage/images/module/$mod->nom.png")}}">
          @endif
          @foreach ($etiquettes as $etiquette)
        @foreach ($etiquettemodules as $etiquettemodule )
            @if ($etiquette->id == $etiquettemodule->etiquette_id and $etiquettemodule->module_id == $mod->id)
            <p style="background-color:{{ $etiquette->couleur }}" >{{ $etiquette->nom }} </p>
            @endif
        @endforeach
        @endforeach
      </div>
      <div>
            {{ $mod->description }}
        </div>
        <div>
            {{ $mod->temps }}<br>
            {{ $mod->materiel }}<br>
            {{ $mod->projetPeda }}<br>
            {{ $mod->lieu }}<br>
            {{ $mod->format }}<br>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                     @endif
                @endforeach
        </div>
     <div>
         @foreach($programmation as $prog)

             @if($prog->id==$cProg->programmation_id)
                <div>
                 Date de Debut :{{$prog->dateDebut}}
                 </div>
                 <div>
                 Date de Fin :{{$prog->dateFin}}
                 </div>
                 <div>
                 Nombre de personne prévues : {{$prog->nbPersonnesPrevues}}
                 </div>

             @endif
        @endforeach
    </div>
 </div>


