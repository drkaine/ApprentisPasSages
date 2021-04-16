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
                return view("edit/editCoup-coeur",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>Categoriecoupsdecoeur::where('id','=',$request->idCC)->get(),"catalogues"=>$this->afficheCatalogue(),"cdc"=>Coupsdecoeur::where('id','=',$request->idC)->get()]);
            }

        public function categorie_coups_de_coeurEdit(Request $request)
            {
                return view("edit/editCategorieCoup-coeur",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>Categoriecoupsdecoeur::where('id','=',$request->idCC)->get(),"catalogues"=>$this->afficheCatalogue()]);
            }

        public function getOneTeamAdmin( Request $request)
            {
            return view('admin/team-admin', ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"team"=>Membre::where('id','=',$request->id)->get(),"ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),"statut"=>Statut::get(),"membreStatut"=>Membrestatut::get()]);
            }


        function EvenementEdit(Request $request)
        {
            return view("edit/editEvenement", ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'Photo'=> $this->affichePartenaires(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),"module"=>$this->getModule(),"action"=>$this->getAction(),"programmationId"=>Programmation::where('id','=',$request->pid)->get(),"actionId"=>Action::where('id','=',$request->aid)->get(),"moduleId"=>Module::where('id','=',$request->mid)->get()]);
        }

        function moduleEdit(Request $request)
        {
            return view("edit/editModule",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),"prestation"=>$request->prestation,"etiquette"=>$this->getEtiquette(),"action"=>$this->getAction(),"module"=>Module::where('id','=',$request->moduleId)->get(),"etiquetteModule"=>$this->getEtiquetteModule(),"moduleAction"=>Moduleaction::get()]);
        }

        function etiquetteEdit(Request $request)
        {
            return view("edit/editEtiquette",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),"etiquette"=>Etiquette::where('id','=',$request->eid)->get()]);
        }

        function actionEdit(Request $request)
        {
            return view("edit/editAction",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),"prestation"=>$request->prestation,"action"=>Action::where('id','=',$request->aid)->get(),"actionCatalogue"=>Actioncatalogue::get(),]);
        }
}
