<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiteurController extends Controller
{

        // function accueil(){
        //     return view('visiteur/accueil',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get(), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule(),'page'=>$this->getPageByNom("contact")]);
        // }

        // function getOneTeam( Request $request)
        // {
        //    return view('visiteur/team', ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"team"=>Membre::where('id','=',$request->id)->get(),"ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        // }

        // function evenement()
        // {
        //     return view("visiteur/evenements", ['Photo'=> $this->affichePartenaires(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'Event'=> $this->Programmation::with('getProg')->get(),'page'=>$this->getPageByNom("contact")]);
        // }


        // function association()
        // {
        //     return view("visiteur/association",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(),'asso'=>$this->getPageByNom("association"),"info"=>$this->getPageByNom("Information"),'page'=>$this->getPageByNom("contact")]);
        // }

        // function galerie()
        // {
        //     return view("visiteur/galerie",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"albums"=>$this->afficheAlbum(),"catalogues"=>$this->afficheCatalogue(), "couv",'page'=>$this->getPageByNom("contact")]);
        // }

        // function coups_de_coeur()
        // {
        //     return view("visiteur/coup-coeur",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        // }

        // function prestations(Request $request)
        // {
        //     return view("visiteur/prestation",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(), "prestation"=>$request->prestation,"actions"=>$this->getActionC($request->prestation),'modules'=>Module::get(),'modulesac'=>Moduleaction::get(), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule(),'page'=>$this->getPageByNom("contact")]);
        // }

        // function album(Request $request)
        // {
        //     return view("visiteur/album", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"photos"=>$this->getPhotoByAlbum($request->nom), "nom"=>$request->nom,"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        // }

    }