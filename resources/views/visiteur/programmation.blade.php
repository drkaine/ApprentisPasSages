<div>
  @foreach($action as $act)
      @if($act->id==$cProg->action_id)
          <h4 class="titre">{!! $act->nom!!}</h4><br>
     @endif
 @endforeach
</div>

<div>
  <div  class='card-module'>
      @php $compte=0; @endphp
      @foreach($modules as $module)
          @php $compte++; @endphp
          @if($module->id==$cProg->module_id)
              <div class = "module"> 
                  @if ($module->img == null)
                      <img src="{{asset("storage/images/apprentispassages_logo_renard2.png ")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compte}}">
                  @else
                      <img src="{{asset("storage/images/module/$module->nom.png")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compte}}">
                  @endif
                  <div class="nom-modal">
                      {!! $module->nom !!}
                  </div>
              </div>
              
              <!-- Modal -->
              <div id="myModal{{$compte}}" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                      @include("modal/modules-v");
                  </div>
              </div>
          @endif
     @endforeach
  </div>
<div>

@foreach($programmation as $prog)
  @if($prog->id==$cProg->programmation_id)
      <div>
          Date de Debut :{!! $prog->dateDebut!!}
      </div>
      <div>
          Date de Fin :{!! $prog->dateFin!!}
      </div>
      <div>
          Nombre de personne prévues : {!! $prog->nbPersonnesPrevues!!}
      </div>
  @endif
@endforeach
