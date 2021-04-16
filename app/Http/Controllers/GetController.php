<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Action;
use App\Models\Module;
use App\Models\Tagalbum;
use App\Models\Catalogue;
use App\Models\Etiquette;
use App\Models\Coupsdecoeur;
use App\Models\Etiquettemodule;
use Illuminate\Support\Facades\DB;
use App\Models\Categoriecoupsdecoeur;
use Illuminate\Support\Facades\Storage;

class GetController extends Controller
{
    static function affichePartenaires()
    {
        return Storage::allFiles("partenaires");
    }

    static function afficheCoupsDecoeurs()
    {
        return Coupsdecoeur::with('getCdc')->inRandomOrder()->get();
    }

    static function afficheCategorieCoupsDecoeurs()
    {
        return Categoriecoupsdecoeur::with('getCCdc')->get();
    }

    static function afficheCatalogue()
    {
        return Catalogue::get();
    }

    static function afficheAlbum()
    {
        return Album::get();
    }

    static function getPhotoByAlbum($nom)
    {
        $photo =  [];
        $partenaires = DB::select('select photo_id from tagalbums JOIN albums ON (albums.nom = tagalbums.nom_album) where albums.nom = ?', [$nom]);

        foreach ($partenaires as $partenaire) 
        {
            $photo[] = DB::select(' select * from photos JOIN tagalbums ON (photos.id = tagalbums.photo_id) where photos.id = ?', [$partenaire->photo_id]) ;
        }
    //    $photo = DB::select(' select chemin from photos JOIN tagalbums ON (photos.id = tagalbums.photo_id) where tagalbums.nom_album = ?', [$nom]) ;
    return $photo;
    }

    static function getPageByNom($page)
    {
        return Page::where("nom",$page)->get();
    }

    static function getAction()
    {
        return Action::get();
    }

    static function getCatalogueByNom($catalogues)
    {
        return DB::select(' select id from catalogues where nom = ?', [$catalogues]);
    }

    static function getEtiquette()
    {
        return Etiquette::get();
    }

    static function getModule()
    {
        return Module::get();
    }

    static function getEtiquetteModule()
    {
        return Etiquettemodule::get();
    }

    static function getActionC($catalogues)
    {
        $catalogue =  DB::select(' select * from actions JOIN actioncatalogues ON (actions.id = actioncatalogues.action_id) where actioncatalogues.catalogue_id = ?',[GetController::getCatalogueByNom($catalogues)[0]->id]);
        return $catalogue;
    }

    static function getModuleByIdAction($id)
    {
        $module = DB::select("select * from modules JOIN moduleactions ON (modules.id = moduleactions.module_id) where action_id = ?",[$id]);
        return $module;
    }

    static function getCouv()
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
}
