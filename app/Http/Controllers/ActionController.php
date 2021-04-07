<?php

namespace App\Http\Controllers;
//Controllers
use App\Http\Controllers\ActionCatalogueController;
//Models
use App\Models\Action;
//Illuminate
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class actionController extends Controller
{
    
    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'description' => 'required'


        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $action = new Action();
        $action->nom = $request->nom;
        $action->img=$request->img;
        $action->description=$request->description;
        $action->save();
        
        $array=array();
        for($i=1; $i<$request->compte+1; $i++)
        {
            $s="catt".$i;
            if($request->$s!=null){
                
                
                $caId="catalogueId".$i;
               array_push($array,$request->$caId);
            }
        }
        $acc=new ActioncatalogueController();
        $acc->add($array);
        
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
