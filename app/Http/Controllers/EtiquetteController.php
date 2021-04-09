<?php

namespace App\Http\Controllers;

//Models
use App\Models\Etiquette;
//Illuminate
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class etiquetteController extends Controller
{
    
    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'couleur' => 'required'


        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $etiquette = new Etiquette();
        $etiquette->nom = $request->nom;
        $etiquette->couleur=$request->couleur;
    
        $etiquette->save();
        
        return redirect('all-prestation-admin');
    }


    public function saveEdit(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'nom' => 'required',
            'couleur' => 'required'


        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $etiquette = Etiquette::find($request->id);
        $etiquette->nom = $request->nom;
        $etiquette->couleur=$request->couleur;
    
        $etiquette->save();
        return back();
    }

}
