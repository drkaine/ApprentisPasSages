<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Membre;
use App\Models\Module;
use App\Models\Statut;
use App\Models\ContentProg;
use App\Models\Membrestatut;
use App\Models\Moduleaction;
use Illuminate\Http\Request;
use App\Models\Programmation;

class VisiteurController extends Controller
{
    function getOneTeam( Request $request)
        {
        return view('visiteur/team', ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"team"=>Membre::where('id','=',$request->id)->get(),"ccdc"=>GetController::afficheCategorieCoupsDecoeurs(),"cdc"=>GetController::afficheCoupsDecoeurs(),"catalogues"=>GetController::afficheCatalogue()]);
        }

        function accueil(){
            return view('visiteur/accueil',["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), 'cdc'=>GetController::afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>GetController::afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'modules'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get(), "etiquettes"=>GetController::getEtiquette(), "etiquettemodules"=>GetController::getEtiquetteModule()]);
        }

        function association()
        {
            return view("visiteur/association",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), "catalogues"=>GetController::afficheCatalogue(),'asso'=>GetController::getPageByNom("association"),"info"=>GetController::getPageByNom("Information")]);
        }

        function galerie()
        {
            return view("visiteur/galerie",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"albums"=>GetController::afficheAlbum(),"catalogues"=>GetController::afficheCatalogue(), "couv"=>GetController::getcouv()]);
        }

        function coups_de_coeur()
        {
            return view("visiteur/coup-coeur",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), "ccdc"=>GetController::afficheCategorieCoupsDecoeurs(),"cdc"=>GetController::afficheCoupsDecoeurs(),"catalogues"=>GetController::afficheCatalogue()]);
        }

        function prestations(Request $request)
        {
            return view("visiteur/prestation",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), "catalogues"=>GetController::afficheCatalogue(), "prestation"=>$request->prestation,"actions"=>GetController::getActionC($request->prestation),'modules'=>Module::get(),'modulesac'=>Moduleaction::get(), "etiquettes"=>GetController::getEtiquette(), "etiquettemodules"=>GetController::getEtiquetteModule()]);
        }

        function album(Request $request)
        {
            return view("visiteur/album", ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"photos"=>GetController::getPhotoByAlbum($request->nom), "nom"=>$request->nom,"catalogues"=>GetController::afficheCatalogue()]);
        }

        function planSite()
        {
            return view("plan-site", ['partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue(),"statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),"team"=> Membre::inRandomOrder()->get(),"albums"=>GetController::afficheAlbum()]);
        }
}