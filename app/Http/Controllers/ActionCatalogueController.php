<?php

namespace App\Http\Controllers;
//Model
use App\Models\Membre;
use App\Models\Statut;
use App\Models\actioncatalogue;
//Illuminate
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActioncatalogueController extends Controller
{
    
    
    public function add($catalogue){
        
        $actionId=DB::table('Actions')->select('id')->orderByDesc('id')
        ->limit(1)->get();
        
        foreach($catalogue as $cata)
        {
            
            $actCat= new actioncatalogue();
            $actCat->action_id = $actionId[0]->id;
            $actCat->catalogue_id =$cata;
            $actCat->save();
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

