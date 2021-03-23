<?php


namespace App\Http\Controllers;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Membre;
use App\Models\Catalogue;
use App\Models\Coupsdecoeur;
use Illuminate\Http\Request;
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

        public function getPhoto()
        {
            return Photo::get();
        }

        public function getOneTeam( $teamId)
        {
           return view('team', ['Photo'=> $this->affichePartenaires(),"team"=>Membre::where('id','=',$teamId)->with('getMembre')->get(),"ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue()]);
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
            return view("Formations", ['Photo'=> $this->affichePartenaires(),"catalogues"=>$this->afficheCatalogue()]);
        }

        public function animations()
        {
            return view("Animations", ['Photo'=> $this->affichePartenaires(),"catalogues"=>$this->afficheCatalogue()]);
        }

        public function soutienScolaire()
        {
            return view("Soutien-scolaire", ['Photo'=> $this->affichePartenaires(),"catalogues"=>$this->afficheCatalogue()]);
        }

        public function admin()
        {
            return view("admin", ['Photo'=> $this->affichePartenaires(),"catalogues"=>$this->afficheCatalogue()]);
        }

        public function album($nom)
        {
            return view("album/$nom", ['Photo'=> $this->affichePartenaires(),"photos"=>$this->getPhoto()]);
        }

}
