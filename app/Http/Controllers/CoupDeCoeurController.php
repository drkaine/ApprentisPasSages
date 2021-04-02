<?php

namespace App\Http\Controllers;
//Model
use App\Models\Categoriecoupsdecoeur;
use App\Models\Coupsdecoeur;
//Illuminate
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CoupDeCoeurController extends Controller
{
    
    
    
    
    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'lien' => 'required',
            'nom' => 'required',
            'description' => 'required'
            
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $coupCoeur = new Coupsdecoeur();
        $coupCoeur->nom = $request->nom;
        $coupCoeur->categoriecoupsdecoeur_id = $request->categorieId;
        $coupCoeur->lien = $request->lien;
        $coupCoeur->description=$request->description;
        $coupCoeur->save();
        return redirect("coup-coeur-admin");
    }
    
    
    public function saveEdit(Request $request){

        $validator = Validator::make($request->all(), [
            
            'lien' => 'required',
            'nom' => 'required',
            'description' => 'required'
            
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $coupCoeur = Coupsdecoeur::find($request->id);
        $coupCoeur->nom = $request->nom;
        $coupCoeur->lien = $request->lien;
        $coupCoeur->description=$request->description;
        $coupCoeur->save();
        return back();
    }

}
