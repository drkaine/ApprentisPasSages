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
use App\Models\ContentProg;
use App\Models\Coupsdecoeur;
use App\Models\Membrestatut;
use Illuminate\Http\Request;
use App\Models\Programmation;
use App\Models\Actioncatalogue;
use Illuminate\Support\Facades\DB;
use App\Models\Categoriecoupsdecoeur;

class DeleteController extends Controller
{
    static function deleteCatalogue(Request $request)
    {
        Actioncatalogue::where("catalogue_id",$request->id1)->delete();
        Catalogue::where('id', $request->id1)->delete();
    }

    static function deleteMembre(Request $request)
    {
        Membrestatut::where("membre_id", $request->id1)->delete();
        Membre::where('id', $request->id1)->delete();
    }

    static function deleteEvenement(Request $request)
    {
        ContentProg::where("programmation_id", $request->id1)->where( "module_id", $request->id2)->where( "action_id", $request->id2)->delete();
        Programmation::where('id', $request->id1)->delete();
    }

    static function deleteAlbum(Request $request)
    {
        Tagalbum::where("nom_album", $request->id1)->delete();
        Album::where('nom', $request->id1)->delete();
    }

    static function deletePhoto(Request $request)
    {
        Tagalbum::where("photo_id", $request->id1)->delete();
        Photo::where('id', $request->id1)->delete();
    }

    static function deleteModule(Request $request)
    {
        DB::delete('delete from moduleactions  where module_id = ? and action_id = ?',[$request->id1,$request->id2]);
        // DB::delete('delete from modules where id = ?',[$request->id]);
    }

    static function deleteModuleA(Request $request)
    {
        DB::delete('delete from moduleactions  where module_id = ?',[$request->id1]);
        DB::delete('delete from etiquettemodules where module_id = ?',[$request->id1]);
        Module::where('id',$request->id1)->delete();
    }

    static function deleteAction(Request $request)
    {
        DB::delete('delete from actioncatalogues where catalogue_id = ? and action_id = ?',[$request->id1, $request->id2]);
        // DB::delete('delete from actions where id = ?',[$request->id]);
    }

    static function deleteActionA(Request $request)
    {
        DB::delete('delete from actioncatalogues where action_id = ?',[$request->id2]);
        Action::where('id',$request->id2)->delete();
    }

    static function deleteCategorieCoupCoeur(Request $request)
    {
        Coupsdecoeur::where('categoriecoupsdecoeur_id', $request->id1)->delete();
        Categoriecoupsdecoeur::where("id", $request->id1)->delete();
    }

    static function deleteCoupCoeur(Request $request)
    {
        Coupsdecoeur::where('id', $request->id1)->delete();
    }

    static function deleteEtiquette(Request $request)
    {
        DB::delete('delete from etiquettemodules where module_id = ? and etiquette_id = ?',[$request->id2, $request->id1]);
    }

    static function deleteEtiquetteA(Request $request)
    {
        DB::delete('delete from etiquettemodules where module_id = ? and etiquette_id = ?',[$request->id2, $request->id1]);
        Etiquette::where('id',$request->id1)->delete();
    }
}
