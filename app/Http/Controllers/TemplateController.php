<?php


namespace App\Http\Controllers;
use App\Models\Page;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Action;
use App\Models\Membre;
use App\Models\Module;
use App\Models\Statut;
use App\Models\Tagalbum;
use App\Models\Catalogue;
use App\Models\Etiquette;
use App\Models\ContentProg;
use App\Models\Coupsdecoeur;
use App\Models\Membrestatut;
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
              $photo[] = DB::select(' select * from photos JOIN tagalbums ON (photos.id = tagalbums.photo_id) where photos.id = ?', [$partenaire->photo_id]) ;
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
            $couv = [];
            $albums = Album::get();
            foreach ( $albums as $album)
            {
                $couv[$album->nom] = "";
                $id = Tagalbum::where("nom_album", $album->nom)->inRandomOrder()->get("photo_id");
                   foreach($id as $i)
                    {
                        $photo = Photo::where("id",$i->photo_id)->get();
                        foreach($photo as $p)
                        {
                            $couv[$album->nom] = $p->chemin;
                        } 
                    }
            }
            return $couv;
            
        }

        //ajout
        public function coups_de_coeurAjout(Request $request)
        {
            return view("ajout/ajoutCoup-coeur",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>Categoriecoupsdecoeur::where('id','=',$request->id)->get(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }
        public function categorie_coups_de_coeurAjout(Request $request)
        {
            return view("ajout/ajoutCategorieCoup-coeur",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

        function actionAjout(Request $request)
        {
            return view("ajout/ajoutAction",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact"),"prestation"=>$request->prestation]);
        }

        function albumAjout(Request $request)
        {
            return view("ajout/ajoutAlbum",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

        function photoAjout(Request $request)
        {
            return view("ajout/ajoutPhoto",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact"),"nom"=>$request->nom]);
        }

    function moduleAjout(Request $request)
        {
            return view("ajout/ajoutModule",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact"),"prestation"=>$request->prestation,"etiquette"=>$this->getEtiquette(),"action"=>$this->getAction()]);
        }



         function ajoutOneTeamAdmin( Request $request)
        {
           return view('ajout/ajoutOneteam', ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"team"=>Membre::where('id','=',$request->id)->get(),"ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),"statut"=>Statut::with('getStatut')->get(),'page'=>$this->getPageByNom("contact")]);
        }


        function EvenementAjout()
        {
            return view("ajout/ajoutEvenement", ['Photo'=> $this->affichePartenaires(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact"),"module"=>$this->getModule(),"action"=>$this->getAction()]);
        }
    //edit
    public function coups_de_coeurEdit(Request $request)
        {
            return view("edit/editCoup-coeur",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>Categoriecoupsdecoeur::where('id','=',$request->idCC)->get(),"catalogues"=>$this->afficheCatalogue(),"cdc"=>Coupsdecoeur::where('id','=',$request->idC)->get(),'page'=>$this->getPageByNom("contact")]);
        }

    public function categorie_coups_de_coeurEdit(Request $request)
        {
            return view("edit/editCategorieCoup-coeur",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>Categoriecoupsdecoeur::where('id','=',$request->idCC)->get(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

    public function getOneTeamAdmin( Request $request)
        {
           return view('team-admin', ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"team"=>Membre::where('id','=',$request->id)->get(),"ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),"statut"=>Statut::get(),"membreStatut"=>Membrestatut::get(),'page'=>$this->getPageByNom("contact")]);
        }


    function EvenementEdit(Request $request)
        {
            return view("edit/editEvenement", ['Photo'=> $this->affichePartenaires(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact"),"module"=>$this->getModule(),"action"=>$this->getAction(),"programmationId"=>Programmation::where('id','=',$request->pid)->get(),"actionId"=>Action::where('id','=',$request->aid)->get(),"moduleId"=>Module::where('id','=',$request->mid)->get()]);
        }

        function moduleEdit(Request $request)
        {
            return view("edit/editModule",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact"),"prestation"=>$request->prestation,"etiquette"=>$this->getEtiquette(),"action"=>$this->getAction(),"module"=>Module::where('id','=',$request->moduleId)->get(),"etiquetteModule"=>$this->getEtiquetteModule(),"moduleAction"=>Moduleaction::get()]);
        }

        // Delete

        function deleteCatalogue(Request $request)
        {
            Actioncatalogue::where("catalogue_id",$request->id1)->delete();
            Catalogue::where('id', $request->id1)->delete();
        }

        function deleteMembre(Request $request)
        {
            Membrestatut::where("membre_id", $request->id1)->delete();
            Membre::where('id', $request->id1)->delete();
        }

        function deleteEvenement(Request $request)
        {
            ContentProg::where("programmation_id", $request->id1)->delete();
            Programmation::where('id', $request->id1)->delete();
        }

        function deleteAlbum(Request $request)
        {
            Tagalbum::where("nom_album", $request->id1)->delete();
            Album::where('nom', $request->id1)->delete();
        }

        function deletePhoto(Request $request)
        {
            Tagalbum::where("photo_id", $request->id1)->delete();
            Photo::where('id', $request->id1)->delete();
        }

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
            Coupsdecoeur::where('categoriecoupsdecoeur_id', $request->id1)->delete();
            Categoriecoupsdecoeur::where("id", $request->id1)->delete();
        }

        function deleteCoupCoeur(Request $request)
        {
            Coupsdecoeur::where('id', $request->id1)->delete();
        }

        function deleteEtiquette(Request $request)
        {
            DB::delete('delete from etiquettemodules where module_id = ? and etiquette_id = ?',[$request->id2, $request->id1]);
        }



        function getOneTeam( Request $request)
        {
           return view('visiteur/team', ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"team"=>Membre::where('id','=',$request->id)->get(),"ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

        function accueil(){
            return view('visiteur/accueil',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'modules'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get(), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule(),'page'=>$this->getPageByNom("contact")]);
        }

        function evenement()
        {
            return view("visiteur/evenements", ['Photo'=> $this->affichePartenaires(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'Event'=> $this->Programmation::with('getProg')->get(),'page'=>$this->getPageByNom("contact")]);
        }


        function association()
        {
            return view("visiteur/association",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(),'asso'=>$this->getPageByNom("association"),"info"=>$this->getPageByNom("Information"),'page'=>$this->getPageByNom("contact")]);
        }

        function galerie()
        {
            return view("visiteur/galerie",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"albums"=>$this->afficheAlbum(),"catalogues"=>$this->afficheCatalogue(), "couv"=>$this->getcouv(),'page'=>$this->getPageByNom("contact")]);
        }

        function coups_de_coeur()
        {
            return view("visiteur/coup-coeur",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

        function prestations(Request $request)
        {
            return view("visiteur/prestation",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(), "prestation"=>$request->prestation,"actions"=>$this->getActionC($request->prestation),'modules'=>Module::get(),'modulesac'=>Moduleaction::get(), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule(),'page'=>$this->getPageByNom("contact")]);
        }

        function album(Request $request)
        {
            return view("visiteur/album", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"photos"=>$this->getPhotoByAlbum($request->nom), "nom"=>$request->nom,"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }


        function admin()
        {
            return view("admin/admin", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue()]);
        }

        function accueilAdmin(){
            return view('admin/accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'modules'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get(), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule(),'page'=>$this->getPageByNom("contact")]);

        }

        function evenementAdmin()
        {
            return view("admin/evenements-admin", ['Photo'=> $this->affichePartenaires(),'partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'Event'=> $this->Programmation::with('getProg')->get(),'page'=>$this->getPageByNom("contact")]);
        }


        function associationAdmin()
        {
            return view("admin/association-admin",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(),'asso'=>$this->getPageByNom("association"),"info"=>$this->getPageByNom("Information"),'page'=>$this->getPageByNom("contact")]);
        }

        function galerieAdmin()
        {
            return view("admin/galerie-admin",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"albums"=>$this->afficheAlbum(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact"), "couv"=>$this->getcouv()]);
        }

        function coups_de_coeurAdmin()
        {
            return view("admin/coup-coeur-admin",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "ccdc"=>$this->afficheCategorieCoupsDecoeurs(),"cdc"=>$this->afficheCoupsDecoeurs(),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

        function prestationsAdmin(Request $request)
        {
            return view("admin/prestation-admin",['partenaires'=> $this->getPhotoByAlbum("partenaires"), "catalogues"=>$this->afficheCatalogue(), "prestation"=>DB::select('select * from catalogues where nom = ?',[$request->prestation]),"actions"=>$this->getActionC($request->prestation),'modules'=>Module::get(),'modulesac'=>Moduleaction::get(),'page'=>$this->getPageByNom("contact"), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule()]);
        }

        function albumAdmin(Request $request)
        {
            return view("admin/album-admin", ['partenaires'=> $this->getPhotoByAlbum("partenaires"),"photos"=>$this->getPhotoByAlbum($request->nom), "nom"=>$request->nom,"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }

        function retour()
        {
            return view('admin/accueil-admin',['partenaires'=> $this->getPhotoByAlbum("partenaires"), 'cdc'=>$this->afficheCoupsDecoeurs(),"team"=> Membre::inRandomOrder()->get(), "catalogues"=>$this->afficheCatalogue(),'programmation'=>Programmation::with('getModules','getActions')->get(),'action'=>Action::with('getProgs', 'getModules')->get(),'modules'=>Module::with('getProgs','getActions')->get(),'contentProgs'=>ContentProg::with('getModules','getActions','getProgs')->get(), "etiquettes"=>$this->getEtiquette(), "etiquettemodules"=>$this->getEtiquetteModule(),'page'=>$this->getPageByNom("contact")]);
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
                    return redirect("accueil-admin");

                case 'membre':
                    $this->deleteMembre($request);
                    return redirect("accueil-admin");
                    
                case 'action':
                    $this->deleteAction($request);
                    return redirect("accueil-admin");

                case "module":
                    $this->deleteModule($request);
                    return redirect("accueil-admin");

                case "etiquette":
                    $this->deleteEtiquette($request);
                    return redirect("accueil-admin");

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

        function catalogueAjout(Request $request)
        {
            return view("ajout/ajoutCatalogue",['partenaires'=> $this->getPhotoByAlbum("partenaires"),"catalogues"=>$this->afficheCatalogue(),'page'=>$this->getPageByNom("contact")]);
        }
}

