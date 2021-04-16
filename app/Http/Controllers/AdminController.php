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
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function admin()
        {
            return view("admin/admin", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue()]);
        }

        function mdpOublie()
        {
            return view("admin/mdp-oublie", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue()]);
        }
        function changement_mdp()
        {
            return view("admin/changement_mdp", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),"email" => session()->get( 'email' )]);
        } 

        function accueilAdmin(){
            return view('admin/accueil-admin',["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"), 'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'modules'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get(),"etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule()]);
        }

        function associationAdmin()
        {
            return view("admin/association-admin",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(),'asso'=>$this->getPageByNom("association"),"info"=>$this->getPageByNom("Information")]);
        }

        function galerieAdmin()
        {
            return view("admin/galerie-admin",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"albums"=>$this->afficheAlbum(),"catalogues"=>$this->afficheCatalogue(), "couv"=>$this->getcouv()]);
        }

        function coups_de_coeurAdmin()
        {
            return view("admin/coup-coeur-admin",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue()]);
        }

        function prestationsAdmin(Request $request)
        {
            return view("admin/prestation-admin",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(), "prestation"=>DB::select('select * from catalogues where nom = ?',[$request->prestation]),"actions"=>$this->getActionC($request->prestation),'modules'=>Module::get(),'modulesac'=>Moduleaction::get(), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule()]);
        }

        function albumAdmin(Request $request)
        {
            return view("admin/album-admin", ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"photos"=>$this->getPhotoByAlbum($request->nom), "nom"=>$request->nom,"catalogues"=>$this->afficheCatalogue()]);
        }

        function allPrestationsAdmin(Request $request)
        {
            return view("admin/all-prestation-admin",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"), "prestation"=>DB::select('select * from catalogues where nom = ?',[$request->prestation]),"actions"=>Action::get(),'modules'=>Module::get(),'modulesac'=>Moduleaction::get(), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule(),"catalogues"=>$this->afficheCatalogue()]);
        }


        function retour(Request $request)
        {
            switch ($request->choix)
            {
                case 'catalogue':
                    return redirect("accueil-admin");

                case 'membre':
                    return redirect("accueil-admin");
                    
                case 'action':
                    return redirect("all-prestation-admin");

                case "module":
                    return redirect("all-prestation-admin");

                case "etiquette":
                    return redirect("all-prestation-admin");

                case 'evenement':
                    return redirect("accueil-admin");

                case 'album':
                    return redirect("galerie-admin");

                case 'photo':
                    return redirect("album-admin/$request->id2");

                case 'catcdc':
                    return redirect("coup-coeur-admin");

                case "cdc":
                    return redirect("coup-coeur-admin");
            }
        }

        function demandeSuppression(Request $request)
        {
            return view("confirmation-suppression", ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> $this->getPhotoByAlbum("partenaires"), "id"=>$request->id,"catalogues"=>$this->afficheCatalogue(), "choix"=>$request->choix, "id1"=>$request->id1, "id2"=>$request->id2, "id"=>$request->id3]);
        }

        function confirmationSuppression(Request $request)
        {
            switch ($request->choix)
            {
                case 'catalogue':
                    $this->deleteCatalogue($request);
                    return redirect("accueil-admin");

                case 'membre':
                    $this->deleteMembreP($request);
                    return redirect("accueil-admin");
                    
                case 'action':
                    $this->deleteActionA($request);
                    return redirect("all-prestation-admin");

                case "module":
                    $this->deleteModuleA($request);
                    return redirect("all-prestation-admin");

                case "etiquette":
                    $this->deleteEtiquetteA($request);
                    return redirect("all-prestation-admin");

                case 'actionP':
                    $this->deleteAction($request);
                    return redirect("all-prestation-admin");

                case "moduleP":
                    $this->deleteModule($request);
                    return redirect("all-prestation-admin");

                case "etiquetteP":
                    $this->deleteEtiquette($request);
                    return redirect("all-prestation-admin");

                case 'evenement':
                    $this->deleteEvenement($request);
                    return redirect("accueil-admin");

                case 'album':
                    $this->deleteAlbum($request);
                    return redirect("galerie-admin");

                case 'photo':
                    $this->deletephoto($request);
                    return redirect("album-admin/$request->id2");
                case 'catcdc':
                    $this->deleteCategorieCoupCoeur($request);
                    return redirect("coup-coeur-admin");

                case "cdc":
                    $this->deleteCoupCoeur($request);
                    return redirect("coup-coeur-admin");
            }
        }
}
