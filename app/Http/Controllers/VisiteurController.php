<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Membre;
use App\Models\Module;
use App\Models\Statut;
use App\Models\Catalogue;
use App\Models\Etiquette;
use App\Models\Calendrier;
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

        function accueil(Request $request){
            return view('visiteur/accueil',["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), 'cdc'=>GetController::afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>GetController::afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'modules'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get(), "etiquettes"=>GetController::getEtiquette(), "etiquettemodules"=>GetController::getEtiquetteModule(),"calendrier"=>new Calendrier($request->annee,$request->mois)]);
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

        function recherche(Request $request)
        {
            $recherche =$request->recherche ;
            $objet=array();
            $objet['membre'] = Membre::where('nom','LIKE','%'.$recherche.'%')->orWhere('email','LIKE','%'.$recherche.'%')->orWhere('prenom','LIKE','%'.$recherche.'%')->orWhere('description','LIKE','%'.$recherche.'%')->get();
            $objet['action'] = Action::where('nom','LIKE','%'.$recherche.'%')->orWhere('description','LIKE','%'.$recherche.'%')->get();
            $objet['module'] = Module::where('nom','LIKE','%'.$recherche.'%')->orWhere('description','LIKE','%'.$recherche.'%')->get();
            $objet['etiquette'] = Etiquette::where('nom','LIKE','%'.$recherche.'%')->get();
            foreach($objet as $obj)
            {
                if(count($obj) > 0 and $recherche!=NULL )
                {
                    return view('visiteur/recherche', ['partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogue"=>GetController::afficheCatalogue(),"statu"=>Statut::get(),"teams"=> Membre::get(),"team"=> Membre::get(),"albums"=>GetController::afficheAlbum(),"etiquettes"=>GetController::getEtiquette(),"actions"=>GetController::getAction(),"modules"=>GetController::getModule(),"statut"=>Statut::get(),"membreStatut"=>Membrestatut::get(), "etiquettemodules"=>GetController::getEtiquetteModule(),'moduleAction'=>Moduleaction::get(), "prestation"=>Catalogue::get(),"catalogues"=>GetController::afficheCatalogue(),"requete"=>$recherche])->withDetails($objet)->withQuery ( $recherche );
                }
            }
            return view ('visiteur/recherche',['partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogue"=>GetController::afficheCatalogue(),"statu"=>Statut::get(),"teams"=> Membre::get(),"membreStatut"=>Membrestatut::get(),"catalogues"=>GetController::afficheCatalogue()]);
        }
}