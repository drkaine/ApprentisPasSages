<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        // function evenementAdmin()
        // {
        //     return view("admin/evenements-admin", ['Photo'=> $this->affichePartenaires(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'Event'=> $this->Programmation::with('getProg')->get(),'page'=>$this->getPageByNom("contact")]);
        // }


        // function associationAdmin()
        // {
        //     return view("admin/association-admin",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(),'asso'=>$this->getPageByNom("association"),"info"=>$this->getPageByNom("Information"),'page'=>$this->getPageByNom("contact")]);
        // }

        // function galerieAdmin()
        // {
        //     return view("admin/galerie-admin",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"albums"=>$this->afficheAlbum(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        // }

        // function coups_de_coeurAdmin()
        // {
        //     return view("admin/coup-coeur-admin",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        // }

        // function prestationsAdmin(Request $request)
        // {
        //     return view("admin/prestation-admin",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(), "prestation"=>DB::select('select * from catalogues where nom = ?',[$request->prestation]),"actions"=>$this->getActionC($request->prestation),'modules'=>Module::get(),'modulesac'=>Moduleaction::get(),'page'=>$this->getPageByNom("contact"), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule()]);
        // }

        // function albumAdmin(Request $request)
        // {
        //     return view("admin/album-admin", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"photos"=>$this->getPhotoByAlbum($request->nom), "nom"=>$request->nom,"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        // }

        // function retour()
        // {
        //     return view('admin/accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'page'=>$this->getPageByNom("contact"),'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()]);
        // }

        // function demandeSuppression(Request $request)
        // {
        //     return view("confirmation-suppression", ['partenaires'=> $this->getPhotoByAlbum("partenaires"), "id"=>$request->id,"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact"), "choix"=>$request->choix, "id1"=>$request->id1, "id2"=>$request->id2]);
        // }
}
