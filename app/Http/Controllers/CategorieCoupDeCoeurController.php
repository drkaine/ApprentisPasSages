<?php

namespace App\Http\Controllers;
//Model
use App\Models\Categoriecoupsdecoeur;
//Illuminate
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategorieCoupDeCoeurController extends Controller
{
    
    
    
    
    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required'
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $categoriecoupsdecoeur = new Categoriecoupsdecoeur();
        $categoriecoupsdecoeur->nom = $request->nom;
        $categoriecoupsdecoeur->save();
        return redirect("coup-coeur-admin");
    }
    
    
    public function saveEdit(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required'
            
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $categoriecoupsdecoeur = Categoriecoupsdecoeur::find($request->id);
        var_dump($categoriecoupsdecoeur);
        $categoriecoupsdecoeur->nom = $request->nom;
        $categoriecoupsdecoeur->save();
        return back();
    }

}
