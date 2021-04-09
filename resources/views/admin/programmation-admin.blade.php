



<div>
    @foreach($action as $act)

        @if($act->id==$cProg->action_id)
        <h4>{{$act->nom}}</h4><br>

       @endif
   @endforeach
</div>
   <div>
       <div>
            @foreach($modules as $module)
            @if($module->id==$cProg->module_id)

               <button type="button"  data-toggle="modal" data-target="#modul">{{ $module->nom }}</button><br>


<!-- Modal -->
<div id="modul" class="modal fade" role="dialog">
<div class="modal-dialog">

@include("modal/modules");

</div>
</div>
            @endif
       @endforeach
</div>
<div>
         @foreach($programmation as $prog)

             @if($prog->id==$cProg->programmation_id)
             <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"evenement" ,'id1'=>$prog->id,"id2"=>""]) }}" method="post">
                {{ csrf_field() }}
                <button class="btn btn-danger">
                    <i class="fas fa-minus-circle"></i>
                </button>
            </form>
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


