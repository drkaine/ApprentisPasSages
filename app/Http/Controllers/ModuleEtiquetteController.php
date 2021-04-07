<?php

namespace App\Http\Controllers;
//Model
use App\Models\Module;
use App\Models\Etiquette;
use App\Models\Etiquettemodule;
//Illuminate
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ModuleetiquetteController extends Controller
{
    
    
    public function add($etiquette){
        
        $moduleId=DB::table('Modules')->select('id')->orderByDesc('id')
        ->limit(1)->get();
        
        foreach($etiquette as $etiq)
        {
            
            $modEti= new Etiquettemodule();
            $modEti->module_id = $moduleId[0]->id;
            $modEti->etiquette_id =$etiq;
            $modEti->save();
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

