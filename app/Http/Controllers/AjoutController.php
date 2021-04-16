<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Models\Statut;
use App\Models\Membrestatut;
use Illuminate\Http\Request;
use App\Models\Categoriecoupsdecoeur;

class AjoutController extends Controller
{
    function catalogueAjout(Request $request)
    {
        return view("ajout/ajoutCatalogue",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue()]);
    }

    function coups_de_coeurAjout(Request $request)
    {
        return view("ajout/ajoutCoup-coeur",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>Categoriecoupsdecoeur::where('id','=',$request->id)->get(),"catalogues"=>$this->afficheCatalogue()]);
    }

    function categorie_coups_de_coeurAjout(Request $request)
    {
        return view("ajout/ajoutCategorieCoup-coeur",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue()]);
    }

    function actionAjout(Request $request)
    {
        return view("ajout/ajoutAction",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),"prestation"=>$request->prestation]);
    }

    function albumAjout(Request $request)
    {
        return view("ajout/ajoutAlbum",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue()]);
    }

    function photoAjout(Request $request)
    {
        return view("ajout/ajoutPhoto",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),"nom"=>$request->nom]);
    }

    function moduleAjout(Request $request)
    {
        return view("ajout/ajoutModule",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),"prestation"=>$request->prestation,"etiquette"=>$this->getEtiquette(),"action"=>$this->getAction()]);
    }

    function ajoutOneTeamAdmin( Request $request)
    {
    return view('ajout/ajoutOneteam', ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"team"=>Membre::where('id','=',$request->id)->get(),"ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),"statut"=>Statut::with('getStatut')->get()]);
    }

    function etiquetteAjout(Request $request)
    {
        return view("ajout/ajoutEtiquette",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue()]);
    }

    function EvenementAjout()
    {
        return view("ajout/ajoutEvenement", ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'Photo'=> $this->affichePartenaires(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),"module"=>$this->getModule(),"action"=>$this->getAction()]);
    }

    function adminAjout()
    {
        return view("ajout/ajoutAdmin",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(),"statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get()]);
    }
}
