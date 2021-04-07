<?php

namespace App\Http\Controllers;
//Model
use App\Models\Module;
use App\Models\Action;
use App\Models\Moduleaction;
//Illuminate
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ModuleactionController extends Controller
{
    
    
    public function add($action){
        
        $moduleId=DB::table('Modules')->select('id')->orderByDesc('id')
        ->limit(1)->get();
        
        foreach($action as $acti)
        {
            
            $modAct= new Moduleaction();
            $modAct->module_id = $moduleId[0]->id;
            $modAct->action_id =$acti;
            $modAct->save();
        }
    
    }
    
    public function saveEdit($statutId){
        
        
        
        DB::table('actioncatalogues')->where('action_id', '=', $action)->delete();
        
        
        
        $memStat = new Membrestatut();
        $memStat->membre_id = $membreId[0]->id;
        $memStat->statut_id =$statutId;
        $memStat->save();
           
    }
}

