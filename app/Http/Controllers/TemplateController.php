<?php


namespace App\Http\Controllers;
use App\Models\Page;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Action;
use App\Models\Membre;
use App\Models\Module;
use App\Models\Tagalbum;
use App\Models\Catalogue;
use App\Models\Etiquette;
use App\Models\ContentProg;
use App\Models\Coupsdecoeur;
use App\Models\Moduleaction;
use Illuminate\Http\Request;
use App\Models\Programmation;
use App\Models\Actioncatalogue;
use App\Models\Etiquettemodule;
use Illuminate\Support\Facades\DB;
use App\Models\Categoriecoupsdecoeur;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TemplateController extends Controller
{

        function affichePartenaires()
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

        function getPageByNom($page)
        {
            return Page::where("nom",$page)->get();
        }

        function getAction()
        {
            return Action::get();
        }

        function getCatalogueByNom($catalogues)
        {
            return DB::select(' select id from catalogues where nom = ?', [$catalogues]);
        }

        function getEtiquette()
        {
            return Etiquette::get();
        }

        function getModule()
        {
            return Module::get();
        }

        function getEtiquetteModule()
        {
            return Etiquettemodule::get();
        }

        function getActionC($catalogues)
        {
            $catalogue =  DB::select(' select * from actions JOIN actioncatalogues ON (actions.id = actioncatalogues.action_id) where actioncatalogues.catalogue_id = ?',[$this->getCatalogueByNom($catalogues)[0]->id]);
            return $catalogue;
        }

        function getModuleByIdAction($id)
        {
            $module = DB::select("select * from modules JOIN moduleactions ON (modules.id = moduleactions.module_id) where action_id = ?",[$id]);
            return $module;
        }

        function getCouv()
        {

        }

        function deleteCatalogue(Request $request)
        {
            DB::delete('delete from actioncatalogues where catalogue_id = ?',[$request->id]);
            DB::delete('delete from catalogues where id = ?',[$request->id1]);
        }

        function deleteMembre(Membre $membre)
        {
            $membre->trashed();
        }

        // function deleteAlbum(Request $request)
        // {
        //     DB::delete('delete from albums where nom = ?',[$request->id]);
        //     return redirect('/galerie-admin');
        // }

        // function deletePhoto(Request $request)
        // {
        //     DB::delete('delete from photos where id = ?',[$request->id]);
        //     return redirect('/Album-admin/$request->id');
        // }

        function deleteModule(Request $request)
        {
            DB::delete('delete from moduleactions  where module_id = ? and action_id = ?',[$request->id1,$request->id2]);
            // DB::delete('delete from modules where id = ?',[$request->id]);
        }

        function deleteAction(Request $request)
        {
            DB::delete('delete from actioncatalogues where catalogue_id = ? and action_id = ?',[$request->id1, $request->id2]);
            // DB::delete('delete from actions where id = ?',[$request->id]);
        }

        function deleteCategorieCoupCoeur(Request $request)
        {
            DB::delete('delete from coupsdecoeurs where categoriecoupsdecoeur_id = ?',[$request->id]);
            DB::delete('delete from categoriecoupsdecoeurs where id = ?',[$request->id]);
        }

        function deleteCoupCoeur(Request $request)
        {
            DB::delete('delete from coupsdecoeurs where id = ?',[$request->id]);
        }

        function deleteEtiquette(Request $request)
        {
            DB::delete('delete from etiquettemodules where module_id = ? and etiquette_id = ?',[$request->id2, $request->id1]);
        }



        function getOneTeam( Request $request)
        {
           return view('team', ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"team"=>Membre::where('id','=',$request->id)->get(),"ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

        function accueil(){
            return view('accueil',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get(), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule(),'page'=>$this->getPageByNom("contact")]);
        }

        function evenement()
        {
            return view("evenements", ['Photo'=> $this->affichePartenaires(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'Event'=> $this->Programmation::with('getProg')->get(),'page'=>$this->getPageByNom("contact")]);
        }


        function association()
        {
            return view("association",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(),'asso'=>$this->getPageByNom("association"),"info"=>$this->getPageByNom("Information"),'page'=>$this->getPageByNom("contact")]);
        }

        function galerie()
        {
            return view("galerie",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"albums"=>$this->afficheAlbum(),"catalogues"=>$this->afficheCatalogue(), "couv",'page'=>$this->getPageByNom("contact")]);
        }

        function coups_de_coeur()
        {
            return view("coup-coeur",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

        function prestations(Request $request)
        {
            return view("prestation",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(), "prestation"=>$request->prestation,"actions"=>$this->getActionC($request->prestation),'modules'=>Module::get(),'modulesac'=>Moduleaction::get(), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule(),'page'=>$this->getPageByNom("contact")]);
        }

        function album(Request $request)
        {
            return view("album", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"photos"=>$this->getPhotoByAlbum($request->nom), "nom"=>$request->nom,"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }


        function admin()
        {
            return view("admin", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue()]);
        }

        function getOneTeamAdmin( Request $request)
        {
           return view('team-admin', ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"team"=>Membre::where('id','=',$request->id)->get(),"ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

        function accueilAdmin(){
            return view('accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'page'=>$this->getPageByNom("contact"),'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()]);
        }

        function evenementAdmin()
        {
            return view("evenements-admin", ['Photo'=> $this->affichePartenaires(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'Event'=> $this->Programmation::with('getProg')->get(),'page'=>$this->getPageByNom("contact")]);
        }


        function associationAdmin()
        {
            return view("association-admin",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(),'asso'=>$this->getPageByNom("association"),"info"=>$this->getPageByNom("Information"),'page'=>$this->getPageByNom("contact")]);
        }

        function galerieAdmin()
        {
            return view("galerie-admin",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"albums"=>$this->afficheAlbum(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

        function coups_de_coeurAdmin()
        {
            return view("coup-coeur-admin",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

        function prestationsAdmin(Request $request)
        {
            return view("prestation-admin",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(), "prestation"=>DB::select('select * from catalogues where nom = ?',[$request->prestation]),"actions"=>$this->getActionC($request->prestation),'modules'=>Module::get(),'modulesac'=>Moduleaction::get(),'page'=>$this->getPageByNom("contact"), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule()]);
        }

        function albumAdmin(Request $request)
        {
            return view("album-admin", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"photos"=>$this->getPhotoByAlbum($request->nom), "nom"=>$request->nom,"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

        function retour()
        {
            return view('accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'page'=>$this->getPageByNom("contact"),'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()]);
        }

        function demandeSuppression(Request $request)
        {
            return view("confirmation-suppression", ['partenaires'=> $this->getPhotoByAlbum("partenaires"), "id"=>$request->id,"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact"), "choix"=>$request->choix, "id1"=>$request->id1, "id2"=>$request->id2]);
        }

        function confirmationSuppression(Request $request)
        {
            switch ($request->choix)
            {
                case 'catalogue':
                    $this->deleteCatalogue($request);
                    return view('accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'page'=>$this->getPageByNom("contact"),'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()]);
                case 'membre':
                    $this->deleteMembre($request->membre);
                    return back();
                case 'action':
                    $this->deleteAction($request);
                    return view('accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'page'=>$this->getPageByNom("contact"),'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()]);

                case "module":
                    $this->deleteModule($request);
                    return view('accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'page'=>$this->getPageByNom("contact"),'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()]);

                case "etiquette":
                    $this->deleteEtiquette($request);
                    return view('accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'page'=>$this->getPageByNom("contact"),'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()]);

                case 'evenement':
                    return view('accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'page'=>$this->getPageByNom("contact"),'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()]);
                case 'album':
                    return view('accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'page'=>$this->getPageByNom("contact"),'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()]);
                case 'photo':
                    return view('accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'page'=>$this->getPageByNom("contact"),'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()]);
                case 'catcdc':
                    $this->deleteCategorieCoupCoeur($request);
                    return view('accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'page'=>$this->getPageByNom("contact"),'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()]);
                case "cdc":
                    $this->deleteCoupCoeur($request);
                    return view('accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'page'=>$this->getPageByNom("contact"),'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'module'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get()]);
            }
        }

}
