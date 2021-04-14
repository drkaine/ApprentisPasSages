@extends("templates/template")

@section("content")

    <div id="ban" class="container-fluid m-t-1 ban">
        <h1 id="titreAssociation" >{{ $prestation }}</h1>
    </div>

    <div class="action">
        <ul class ="listing-prestation">
            @php $compte=0; @endphp
            @foreach ($actions as $action)
                <li><h4 class ="nom-action">{{ $action->nom }}</h4>
                </li>
                <ul class='card-module'>
                    @foreach ($modulesac as $moduleac)
                        @foreach ($modules as $module)
                            @php $compte++; @endphp

                            @if($moduleac->action_id == $action->id)
                                @if($moduleac->module_id == $module->id)
                                    <li class = "module"> 
                                        @if ($module->img == null)
                                            <img src="{{asset("storage/images/apprentispassages_logo_renard2.png ")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compte}}">
                                        @else
                                            <img src="{{asset("storage/images/module/$module->nom.png")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compte}}">
                                        @endif
                                        <div class="nom-modal">
                                            {{ $module->nom }}
                                        </div>
                                    </li>
                                    <!-- Modal -->
                                    <div id="myModal{{$compte}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            @include("modal/modules-v")
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            @endforeach
        </ul>
    </div>

    <div class="m-t-1 ban2"></div>
@endsection