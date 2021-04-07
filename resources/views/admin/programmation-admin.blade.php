


   <div>
       <div>
           <h4>
                @foreach($module as $mod)

                     @if($mod->id==$cProg->module_id)
                         {{$mod->nom}}

            </h4>
                       <h5>Insérer photo du module</h5>
                        {{$mod->description}}

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
     <div>
         @foreach($action as $act)

             @if($act->id==$cProg->action_id)
                 {{$act->nom}}

            @endif
        @endforeach
    </div>

