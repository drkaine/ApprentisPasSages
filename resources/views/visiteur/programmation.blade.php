@foreach($programmation as $prog)
    @if($prog->id==$cProg->programmation_id)
        <div>
            @foreach($action as $act)
                @if($act->id==$cProg->action_id)
                    <h4 class="nom-action">{!! $act->nom!!}</h4><br>
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
                                <img src="{{asset("storage/images/apprentispassages_logo_renard2.png ")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compte}}" alt="{!! $module->nom !!}">
                            @else
                                <img src="{{asset("storage/images/$module->img")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compte}}" alt="{!! $module->nom !!}">
                            @endif
                            <div class="nom-modal">
                                {!! $module->nom !!}
                            </div>
                        </div>
                        <div>
                            <div>
                                Date de Debut : {!! $prog->dateDebut!!}
                            </div>
                            <div>
                                Date de Fin : {!! $prog->dateFin!!}
                            </div>
                            <div>
                                Nombre de personne prévues : {!! $prog->nbPersonnesPrevues!!}
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
        </div>
    @endif
@endforeach

