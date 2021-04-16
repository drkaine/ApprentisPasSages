<?php

namespace App\Http\Controllers;

use App\Models\User;
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
use App\Http\Controllers\GetController;

class AdminController extends Controller
{
    function admin()
        {
            return view("admin/admin", ['partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue()]);
        }

        function mdpOublie()
        {
            return view("admin/mdp-oublie", ['partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue()]);
        }

        function changement_mdp()
        {
            return view("admin/changement_mdp", ['partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue(),"email" => session()->get( 'email' )]);
        } 

        function accueilAdmin(){
            return view('admin/accueil-admin',["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), 'cdc'=>GetController::afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>GetController::afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'modules'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get(),"etiquettes"=>GetController::getEtiquette(), "etiquettemodules"=>GetController::getEtiquetteModule()]);
        }

        function associationAdmin()
        {
            return view("admin/association-admin",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), "catalogues"=>GetController::afficheCatalogue(),'asso'=>GetController::getPageByNom("association"),"info"=>GetController::getPageByNom("Information")]);
        }

        function galerieAdmin()
        {
            return view("admin/galerie-admin",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"albums"=>GetController::afficheAlbum(),"catalogues"=>GetController::afficheCatalogue(), "couv"=>GetController::getcouv()]);
        }

        function coups_de_coeurAdmin()
        {
            return view("admin/coup-coeur-admin",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), "ccdc"=>GetController::afficheCategorieCoupsDecoeurs(),"cdc"=>GetController::afficheCoupsDecoeurs(),"catalogues"=>GetController::afficheCatalogue()]);
        }

        function prestationsAdmin(Request $request)
        {
            return view("admin/prestation-admin",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), "catalogues"=>GetController::afficheCatalogue(), "prestation"=>DB::select('select * from catalogues where nom = ?',[$request->prestation]),"actions"=>GetController::getActionC($request->prestation),'modules'=>Module::get(),'modulesac'=>Moduleaction::get(), "etiquettes"=>GetController::getEtiquette(), "etiquettemodules"=>GetController::getEtiquetteModule()]);
        }

        function albumAdmin(Request $request)
        {
            return view("admin/album-admin", ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"photos"=>GetController::getPhotoByAlbum($request->nom), "nom"=>$request->nom,"catalogues"=>GetController::afficheCatalogue()]);
        }

        function allPrestationsAdmin(Request $request)
        {
            return view("admin/all-prestation-admin",["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), "prestation"=>DB::select('select * from catalogues where nom = ?',[$request->prestation]),"actions"=>Action::get(),'modules'=>Module::get(),'modulesac'=>Moduleaction::get(), "etiquettes"=>GetController::getEtiquette(), "etiquettemodules"=>GetController::getEtiquetteModule(),"catalogues"=>GetController::afficheCatalogue()]);
        }

        function userGestion()
        {
            return view("admin/user-gestion", ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"),"catalogues"=>GetController::afficheCatalogue(), "users"=>User::get()]);
        }

        function retour(Request $request)
        {
            switch ($request->choix)
            {
                case "user":
                    return redirect("user-gestion");

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
            return view("confirmation-suppression", ["statu"=>Statut::get(),"membreStatut"=>Membrestatut::get(),"teams"=> Membre::get(),'partenaires'=> GetController::getPhotoByAlbum("partenaires"), "id"=>$request->id,"catalogues"=>GetController::afficheCatalogue(), "choix"=>$request->choix, "id1"=>$request->id1, "id2"=>$request->id2, "id"=>$request->id3]);
        }

        function confirmationSuppression(Request $request)
        {
            switch ($request->choix)
            {
                case "user":
                    DeleteController::deleteUser($request);
                    return redirect("user-gestion");

                case 'catalogue':
                    DeleteController::deleteCatalogue($request);
                    return redirect("accueil-admin");

                case 'membre':
                    DeleteController::deleteMembre($request);
                    return redirect("accueil-admin");
                    
                case 'action':
                    DeleteController::deleteActionA($request);
                    return redirect("all-prestation-admin");

                case "module":
                    DeleteController::deleteModuleA($request);
                    return redirect("all-prestation-admin");

                case "etiquette":
                    DeleteController::deleteEtiquetteA($request);
                    return redirect("all-prestation-admin");

                case 'actionP':
                    DeleteController::deleteAction($request);
                    return redirect("all-prestation-admin");

                case "moduleP":
                    DeleteController::deleteModule($request);
                    return redirect("all-prestation-admin");

                case "etiquetteP":
                    DeleteController::deleteEtiquette($request);
                    return redirect("all-prestation-admin");

                case 'evenement':
                    DeleteController::deleteEvenement($request);
                    return redirect("accueil-admin");

                case 'album':
                    DeleteController::deleteAlbum($request);
                    return redirect("galerie-admin");

                case 'photo':
                    DeleteController::deletephoto($request);
                    return redirect("album-admin/$request->id2");
                case 'catcdc':
                    DeleteController::deleteCategorieCoupCoeur($request);
                    return redirect("coup-coeur-admin");

                case "cdc":
                    DeleteController::deleteCoupCoeur($request);
                    return redirect("coup-coeur-admin");
            }
        }
}
