<?php

namespace App\Http\Controllers;
//Model
use App\Models\Catalogue;
//Illuminate
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CatalogueController extends Controller
{
    
    
    
    
    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required'
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $catalogue = new Catalogue();
        $catalogue->nom = $request->nom;
        $catalogue->save();
        return redirect("accueil-admin");
    }
    
    
    public function saveEdit(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required'
            
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $catalogue = Catalogue::find($request->id);
        $catalogue->nom = $request->nom;
        $catalogue->save();
        return back();
    }

}
