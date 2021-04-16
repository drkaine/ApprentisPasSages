<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Membre;
use App\Models\Module;
use App\Models\Statut;
use App\Models\Etiquette;
use App\Models\Coupsdecoeur;
use App\Models\Membrestatut;
use App\Models\Moduleaction;
use Illuminate\Http\Request;
use App\Models\Programmation;
use App\Models\Actioncatalogue;
use App\Models\Categoriecoupsdecoeur;

class EditController extends Controller
{
    public function coups_de_coeurEdit(Request $request)
        {
            return view("edit/editCoup-coeur",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), "ccdc"=>Categoriecoupsdecoeur::where('id','=',$request->idCC)->get(),"catalogues"=>GetController::afficheCatalogue(),"cdc"=>Coupsdecoeur::where('id','=',$request->idC)->get()]);
        }

    public function categorie_coups_de_coeurEdit(Request $request)
        {
            return view("edit/editCategorieCoup-coeur",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), "ccdc"=>Categoriecoupsdecoeur::where('id','=',$request->idCC)->get(),"catalogues"=>GetController::afficheCatalogue()]);
        }

    public function getOneTeamAdmin( Request $request)
        {
        return view('admin/team-admin', ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"team"=>Membre::where('id','=',$request->id)->get(),"ccdc"=>GetController::afficheCategorieCoupsDecoeurs(),"cdc"=>GetController::afficheCoupsDecoeurs(),"catalogues"=>GetController::afficheCatalogue(),"statut"=>Statut::get(),"membreStatut"=>Membrestatut::get()]);
        }

        function EvenementEdit(Request $request)
        {
            return view("edit/editEvenement", ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'Photo'=> GetController::affichePartenaires(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue(),"module"=>GetController::getModule(),"action"=>GetController::getAction(),"programmationId"=>Programmation::where('id','=',$request->pid)->get(),"actionId"=>Action::where('id','=',$request->aid)->get(),"moduleId"=>Module::where('id','=',$request->mid)->get()]);
        }

        function moduleEdit(Request $request)
        {
            return view("edit/editModule",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue(),"prestation"=>$request->prestation,"etiquette"=>GetController::getEtiquette(),"action"=>GetController::getAction(),"module"=>Module::where('id','=',$request->moduleId)->get(),"etiquetteModule"=>GetController::getEtiquetteModule(),"moduleAction"=>Moduleaction::get()]);
        }

        function etiquetteEdit(Request $request)
        {
            return view("edit/editEtiquette",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue(),"etiquette"=>Etiquette::where('id','=',$request->eid)->get()]);
        }

        function actionEdit(Request $request)
        {
            return view("edit/editAction",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue(),"prestation"=>$request->prestation,"action"=>Action::where('id','=',$request->aid)->get(),"actionCatalogue"=>Actioncatalogue::get(),]);
        }
}
