<?php

namespace App\Http\Controllers;
//controller
use App\Http\Controllers\ContentprogController;
//Model
use App\Models\Programmation;
//Illuminate
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProgrammationController extends Controller
{

    
    
    
    public function saveEdit(Request $request){
        
         $validator = Validator::make($request->all(), [
            'dateDebut' => 'required',
            'dateFin' => 'required',
            'nbPersonnesPrevues' => 'required'
            
            
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        
        $programmation = Programmation::find($request->progid);
        $programmation->dateDebut = $request->dateDebut;
        $programmation->dateFin=$request->dateFin;
        $programmation->nbPersonnesPrevues=$request->nbPersonnesPrevues;
        $programmation->save();
        $cp=new ContentprogController();
        $cp->saveEdit($request->Module,$request->Action,$request->progid);
        
        return redirect("accueil-admin");
    }

    
    
    
    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'dateDebut' => 'required',
            'dateFin' => 'required',
            'nbPersonnesPrevues' => 'required'
            
            
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $programmation = new Programmation();
        $programmation->dateDebut = $request->dateDebut;
        $programmation->dateFin=$request->dateFin;
        $programmation->nbPersonnesPrevues=$request->nbPersonnesPrevues;
        $programmation->save();
        $cp=new ContentprogController();
        $cp->add($request->Module,$request->Action);
           
        
        
        
        return redirect("accueil-admin");
    }
}
