<?php

namespace App\Http\Controllers;
//Controllers
use App\Http\Controllers\ModuleActionController;
use App\Http\Controllers\ModuleEtiquetteController;
//Models
use App\Models\Module;
//Illuminate
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $module->description= $request->description;
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
        if($request->prestationId=="tout")
        return redirect('all-prestation-admin');
        else
        return redirect('/prestation-admin/'.$request->prestationId);
    }


    public function saveEdit(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'description' => 'required',
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $module = Module::find($request->id);
        $module->nom = $request->nom;
        $module->description = $request->description;
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
        $mac->saveEdit($arrayA,$request->id);
        
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
        $mac->saveEdit($arrayE,$request->id);
        
        return back();

}
}
