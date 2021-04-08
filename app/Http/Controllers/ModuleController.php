<?php

namespace App\Http\Controllers;
//Controllers
use App\Models\Action;
use App\Models\Module;
//Models
use Illuminate\Http\Request;
//Illuminate
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ModuleActionController;
use App\Http\Controllers\ModuleEtiquetteController;

class ModuleController extends Controller
{
    
    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'description' => 'required',
            


        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $module = new Module();
        $module->nom = $request->nom;
        $module->img=$request->img;
        $module->temps=$request->temps;
        $module->materiel=$request->materiel;
        $module->projetPeda=$request->projetPeda;
        $module->lieu=$request->lieu;
        $module->format=$request->format;
        $module->save();
        
        $arrayA=array();
        for($i=1; $i<=$request->compteA; $i++)
        {
            $s="actt".$i;
            if($request->$s!=null){
                
                
                $maId="actionId".$i;
               array_push($arrayA,$request->$maId);
            }
        }
        $mac=new ModuleactionController();
        $mac->add($arrayA);
        
        $arrayE=array();
        for($i=1; $i<=$request->compteE; $i++)
        {
            $s="ett".$i;
            if($request->$s!=null){
                
                
                $meId="etiquetteId".$i;
               array_push($arrayE,$request->$meId);
            }
        }
        $mac=new ModuleetiquetteController();
        $mac->add($arrayE);
        
        return redirect('/prestation-admin/'.$request->prestationId);
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
