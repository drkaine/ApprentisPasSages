@extends('templates/template')

@section("content")

<div class="container">
    @if(isset($requete))
       @php $redondant=array("action"=>array(),"module"=>array(),"membre"=>array());@endphp
        <h1> Voici le résultat de la requête <b> {{ $requete }} </b>  :</h1><br>
        <!--Recupere l'/les action/s entier/s-->
        @if(count($details["action"])>0)
            <h2>Action(s) et ses modules :</h2>
            <div class="action">
                <ul class ="listing-prestation">
                    @php $compteA=0; @endphp
                    @foreach ($details["action"] as $action)
                       @php array_push($redondant["action"],$action->id); @endphp
                        <li><h4 class ="nom-action">{!! $action->nom !!}</h4></li>
                        <ul class='card-module'>
                            @foreach ($moduleAction as $moduleac)
                                @foreach ($modules as $module)
                                    @php $compteA++; @endphp
                                    @if($moduleac->action_id == $action->id)
                                        @if($moduleac->module_id == $module->id)
                                            <li class = "module"> 
                                                @if ($module->img == null)
                                                    <img src="{{asset("storage/images/apprentispassages_logo_renard2.png ")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compteA}}">
                                                @else
                                                    <img src="{{asset("storage/images/module/$module->nom.png")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compteA}}">
                                                @endif
                                                <div class="nom-modal">
                                                    {!! $module->nom !!}
                                                </div>
                                            </li>
                                            <!-- Modal -->
                                            <div id="myModal{{$compteA}}" class="modal fade" role="dialog">
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
        @endif
        @php $type=0; @endphp
        @foreach($details["module"] as $mod)
            @foreach ($moduleAction as $ma)
                @foreach ($actions as $action)
                    @php $affiche=1; @endphp
                    @foreach($redondant["action"] as $rac)
                        @if($rac==$action->id)
                            @php $affiche=0; @endphp
                        @endif
                    @endforeach
                    @if($ma->module_id == $mod->id and $action->id==$ma->action_id and $affiche==1)
                        @php $type=1; @endphp
                    @endif
                @endforeach
            @endforeach
        @endforeach
        <!--Recupere le/les catalogue/s par rapport au/x module/s--> 
        @if(count($details["module"])>0 and $type==1)
            <h2>Action(s) Par rapport au(x) module(s) :</h2>
            <div class="action">
                <ul class ="listing-prestation">
                    @php $compteAM=0; @endphp
                    @foreach ($details["module"] as $mod)
                        @foreach ($moduleAction as $ma)
                            @foreach ($actions as $action)
                                @php $affiche=1; @endphp
                                @foreach($redondant["action"] as $rac)
                                    @if($rac==$action->id)
                                        @php $affiche=0; @endphp
                                    @endif
                                @endforeach
                                @if($ma->module_id == $mod->id and $action->id==$ma->action_id and $affiche==1)
                                    @php array_push($redondant["action"],$action->id); @endphp
                                    <li><h4 class ="nom-action">{!! $action->nom !!}</h4></li>
                                    <ul class='card-module'>
                                        @foreach ($moduleAction as $moduleac)
                                            @foreach ($modules as $module)
                                                @php $compteAM++; @endphp
                                                @if($moduleac->action_id == $action->id)
                                                    @if($moduleac->module_id == $module->id)
                                                        <li class = "module"> 
                                                            @if ($module->img == null)
                                                                <img src="{{asset("storage/images/apprentispassages_logo_renard2.png ")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compteAM}}">
                                                            @else
                                                                <img src="{{asset("storage/images/module/$module->nom.png")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compteAM}}">
                                                            @endif
                                                            <div class="nom-modal">
                                                                {!! $module->nom !!}
                                                            </div>
                                                        </li>
                                                        <!-- Modal -->
                                                        <div id="myModal{{$compteAM}}" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                @include("modal/modules-v")
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </ul>
                                @endif
                            @endforeach
                        @endforeach
                    @endforeach
                </ul>
            </div>
        @endif
        <!--Recupere le/les catalogue/s par rapport au/x etiquette/s-->
        @php $type=0; @endphp
         @foreach ($details["etiquette"] as $etiq)
            @foreach($modules as $mod)
                @foreach($etiquettemodules as $emod)
                    @foreach ($moduleAction as $ma)
                        @foreach ($actions as $action)
                            @php $affiche=1; @endphp
                            @foreach($redondant["action"] as $rac)
                                @if($rac==$action->id)
                                    @php $affiche=0; @endphp
                                @endif
                            @endforeach
                            @if($ma->module_id == $mod->id and $action->id==$ma->action_id and $affiche==1 and $etiq->id==$emod->etiquette_id and $mod->id==$emod->module_id)
                                @php $type=1; @endphp
                            @endif
                        @endforeach
                    @endforeach
                @endforeach
            @endforeach
        @endforeach
        @if(count($details["etiquette"])>0 and $type==1)
        <h2>Action(s) Par rapport au(x) etiquette(s) :</h2>
            <div class="action">
                <ul class ="listing-prestation">
                    @php $compteAE=0; @endphp
                    @foreach ($details["etiquette"] as $etiq)
                        @foreach($modules as $mod)
                            @foreach($etiquettemodules as $emod)
                                @foreach ($moduleAction as $ma)
                                    @foreach ($actions as $action)
                                        @php $affiche=1; @endphp
                                        @foreach($redondant["action"] as $rac)
                                            @if($rac==$action->id)
                                                @php $affiche=0; @endphp
                                            @endif
                                        @endforeach
                                        @if($ma->module_id == $mod->id and $action->id==$ma->action_id and $affiche==1 and $etiq->id==$emod->etiquette_id and $mod->id==$emod->module_id)
                                            @php array_push($redondant["action"],$action->id); @endphp
                                            <li><h4 class ="nom-action">{!! $action->nom !!}</h4>
                                            </li>
                                            <ul class='card-module'>
                                                @foreach ($moduleAction as $moduleac)
                                                    @foreach ($modules as $module)
                                                        @php $compteAE++; @endphp
                                                        @if($moduleac->action_id == $action->id)
                                                            @if($moduleac->module_id == $module->id)
                                                                <li class = "module"> 
                                                                    @if ($module->img == null)
                                                                        <img src="{{asset("storage/images/apprentispassages_logo_renard2.png ")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compteAE}}">
                                                                    @else
                                                                        <img src="{{asset("storage/images/module/$module->nom.png")}}" class="miniature-module" data-toggle="modal" data-target="#myModal{{$compteAE}}">
                                                                    @endif
                                                                    <div class="nom-modal">
                                                                        {!! $module->nom !!}
                                                                    </div>
                                                                </li>
                                                                <!-- Modal -->
                                                                <div id="myModal{{$compteAE}}" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">
                                                                        @include("modal/modules-v")
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </ul>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                        @endforeach
                    @endforeach
                </ul>
            </div>
        @endif
        @if(count($details["membre"])>0)
            <h2>Membre(s) :</h2>
            <div class="action">
                <ul class ="listing-prestation">
                    @foreach ($details["membre"] as $mem)
                       @php array_push($redondant["membre"],$mem->id); @endphp
                        <li> 
                            <h3 id="titreAssociation" style="box-sizing:border-box;">{!! $mem->prenom!!} {!! $mem->nom!!}</h3>
                            <section class="one-membre">
                                <section class="membre">
                                    <div class="image-membre">
                                        @if($mem->photo == null)
                                        <img class="imageOneTeam" src=' {{asset("storage/images/team/apprentispassages_logo_renard.png") }} ' alt="photo de l'avatar de l'association ApprentiPasSage">
                                        @else
                                        <img class="imageOneTeam" src='{{asset("storage/images/team/$mem->photo")}}' alt="photo de {!! $mem->nom!!} {!! $mem->prenom!!} de l'association ApprentiPasSage">
                                        @endif
                                    </div>
                                    <div >
                                        <h2 class="membre-ecrit">&Agrave;  propos de moi:</h2>
                                        <div class="membre-ecrit">{!!$mem->description!!}</div>
                                    </div>
                                </section>
                                <section class="membre">
                                    <div class="role-membre">
                                        <h2>Rôle dans l'association</h2>
                                        @foreach($mem->getStatus()->get() as $statut)
                                            <h3 class="membre-ecrit">{!! $statut->nom!!}<br></h3>
                                        @endforeach
                                    </div>
                                    <div class="membre-ecrit">
                                        <h2 class="membre-ecrit">Me contacter:</h2>
                                        <h3 class="membre-ecrit">{!! $mem->telephone !!}</h3>
                                        <h3 class="membre-ecrit">{!! $mem->email!!}</h3>
                                    </div>
                                </section>
                            </section>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    @else
        <div>
            <h1> Pas de résultat !</h1>
        </div>
    @endif
</div>

@endsection
