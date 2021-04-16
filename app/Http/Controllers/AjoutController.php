<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Models\Statut;
use App\Models\Membrestatut;
use Illuminate\Http\Request;
use App\Models\Categoriecoupsdecoeur;

class AjoutController extends Controller
{
    function catalogueAjout()
    {
        return view("ajout/ajoutCatalogue",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue()]);
    }

    function coups_de_coeurAjout(Request $request)
    {
        return view("ajout/ajoutCoup-coeur",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), "ccdc"=>Categoriecoupsdecoeur::where('id','=',$request->id)->get(),"catalogues"=>GetController::afficheCatalogue()]);
    }

    function categorie_coups_de_coeurAjout()
    {
        return view("ajout/ajoutCategorieCoup-coeur",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue()]);
    }

    function actionAjout(Request $request)
    {
        return view("ajout/ajoutAction",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue(),"prestation"=>$request->prestation]);
    }

    function albumAjout()
    {
        return view("ajout/ajoutAlbum",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue()]);
    }

    function photoAjout(Request $request)
    {
        return view("ajout/ajoutPhoto",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue(),"nom"=>$request->nom]);
    }

    function moduleAjout(Request $request)
    {
        return view("ajout/ajoutModule",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue(),"prestation"=>$request->prestation,"etiquette"=>GetController::getEtiquette(),"action"=>GetController::getAction()]);
    }

    function ajoutOneTeamAdmin( Request $request)
    {
    return view('ajout/ajoutOneteam', ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"team"=>Membre::where('id','=',$request->id)->get(),"ccdc"=>GetController::afficheCategorieCoupsDecoeurs(),"cdc"=>GetController::afficheCoupsDecoeurs(),"catalogues"=>GetController::afficheCatalogue(),"statut"=>Statut::with('getStatut')->get()]);
    }

    function etiquetteAjout(Request $request)
    {
        return view("ajout/ajoutEtiquette",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue()]);
    }

    function EvenementAjout()
    {
        return view("ajout/ajoutEvenement", ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'Photo'=> GetController::affichePartenaires(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue(),"module"=>GetController::getModule(),"action"=>GetController::getAction()]);
    }

    function adminAjout()
    {
        return view("ajout/ajoutAdmin",['partenaires'=> GetController::getPhotoByAlbum("partenaires"), "catalogues"=>GetController::afficheCatalogue(),"statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get()]);
    }
}
