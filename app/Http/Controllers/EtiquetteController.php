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
        
        return redirect('TemplateController.allPrestationsAdmin');
    }


    public function saveEdit(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => 'required'


        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $action = Action::find($request->id);
        $action->nom = $request->nom;
        $action->img=$request->img;
        $action->description=$request->description;
        $action->save();
        return back();
    }

}
