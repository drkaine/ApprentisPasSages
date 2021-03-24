<?php


namespace App\Http\Controllers;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Action;
use App\Models\Membre;
use App\Models\Module;
use App\Models\Tagalbum;
use App\Models\Catalogue;
use App\Models\Etiquette;
use App\Models\Coupsdecoeur;
use Illuminate\Http\Request;
use App\Models\Actioncatalogue;
use App\Models\Categoriecoupsdecoeur;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{

        public function affichePartenaires()
        {
            return Storage::allFiles("partenaires");
        }

        function afficheCoupsDecoeurs()
        {
            return Coupsdecoeur::with('getCdc')->inRandomOrder()->get();
        }

        function afficheCategorieCoupsDecoeurs()
        {
            return Categoriecoupsdecoeur::with('getCCdc')->get();
        }

        function afficheCatalogue()
        {
            return Catalogue::get();
        }

        function afficheAlbum()
        {
            return Album::get();
        }

        public function getPhoto(Request $request)
        {
            return view('album', ['Photo'=> $this->affichePartenaires(),"photos"=>Tagalbum::where("nom_album","=",$request->nom)->with("getTagAlbum")->get() ,"nom"=>$request->nom,"catalogues"=>$this->afficheCatalogue()]);

        }

        function getPartenaires()
        {
            return Tagalbum::where("nom_album","=","partenaires")->with("getTagAlbum")->get();
        }

        function getAction()
        {
            return Action::get();
        }

        function getEtiquette()
        {
            return Etiquette::get();
        }

        function getModule()
        {
            return Module::get();
        }

        function getActionCatalogue($catalogue)
        {
            return Actioncatalogue::where("catalogue_id", "=" ,$catalogue)->with("getCatalogue")->get();
        }

        public function getOneTeam( Request $request)
        {
           return view('team', ['Photo'=> $this->affichePartenaires(),"team"=>Membre::where('id','=',$request->id)->with('getMembre')->get(),"ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue()]);
        }

        function accueil(){
            return view('accueil',['Photo'=> $this->affichePartenaires(), 'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::with('getMembre')->inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue()]);
        }

        public function association()
        {
            return view("association",['Photo'=> $this->affichePartenaires(), "catalogues"=>$this->afficheCatalogue()]);
        }

        public function galerie()
        {
            return view("galerie",['Photo'=> $this->affichePartenaires(),"albums"=>$this->afficheAlbum(),"catalogues"=>$this->afficheCatalogue()]);
        }

        public function coups_de_coeur()
        {
            return view("coup-coeur",['Photo'=> $this->affichePartenaires(), "ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue()]);
        }

        public function formations()
        {
            return view("Formations", ['Photo'=> $this->affichePartenaires(),"catalogue"=>$this->getActionCatalogue(2),"catalogues"=>$this->afficheCatalogue()]);
        }

        public function animations()
        {
            return view("Animations", ['Photo'=> $this->affichePartenaires(),"catalogue"=>$this->getActionCatalogue(1),"catalogues"=>$this->afficheCatalogue()]);
        }

        public function soutienScolaire()
        {
            return view("Soutien-scolaire", ['Photo'=> $this->affichePartenaires(),"catalogue"=>$this->getActionCatalogue(3),"catalogues"=>$this->afficheCatalogue()]);
        }

        public function admin()
        {
            return view("admin", ['Photo'=> $this->affichePartenaires(),"catalogues"=>$this->afficheCatalogue()]);
        }

        public function album(Request $request)
        {
            return view("album", ['Photo'=> $this->affichePartenaires(),"photos"=>$this->getPhoto($request)]);
        }

}
