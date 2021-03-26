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
use App\Models\Programmation;
use App\Models\Actioncatalogue;
use Illuminate\Support\Facades\DB;
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

        function getPhotoByAlbum($nom)
        {
            $photo =  [];
            $partenaires = DB::select('select photo_id from tagalbums JOIN albums ON (albums.nom = tagalbums.nom_album) where albums.nom = ?', [$nom]);

           foreach ($partenaires as $partenaire) {
              $photo[] = DB::select(' select chemin from photos JOIN tagalbums ON (photos.id = tagalbums.photo_id) where photos.id = ?', [$partenaire->photo_id]) ;
           }

        //    $photo = DB::select(' select chemin from photos JOIN tagalbums ON (photos.id = tagalbums.photo_id) where tagalbums.nom_album = ?', [$nom]) ;
           return $photo;
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

        function getActionC(Request $request)
        {
            return Action::where("catalogue_id", "=" ,$request->catalogue)->with("getCatalogue")->get();
        }

        public function getOneTeam( Request $request)
        {
           return view('team', ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"team"=>Membre::where('id','=',$request->id)->get(),"ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue()]);
        }

        function accueil(){
            return view('accueil',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue()]);
        }

        public function evenement()
        {
            return view("evenements", ['Photo'=> $this->affichePartenaires(),"catalogues"=>$this->afficheCatalogue(),'Event'=> $this->Programmation::with('getProg')->get(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get()/*,'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()*/]);
        }


        public function association()
        {
            return view("association",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue()]);
        }

        public function galerie()
        {
            return view("galerie",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"albums"=>$this->afficheAlbum(),"catalogues"=>$this->afficheCatalogue()]);
        }

        public function coups_de_coeur()
        {
            return view("coup-coeur",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue()]);
        }

        function prestations()
        {
            return view("prestation",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue()]);
        }

        public function admin()
        {
            return view("admin", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue()]);
        }

        public function album(Request $request)
        {
            return view("album", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"photos"=>$this->getPhotoByAlbum($request->nom), "nom"=>$request->nom,"catalogues"=>$this->afficheCatalogue()]);
        }


}
