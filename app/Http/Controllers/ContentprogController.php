<?php

namespace App\Http\Controllers;
//Model
use App\Models\Programmation;
use App\Models\Model;
use App\Models\Action;
use App\Models\ContentProg;
//Illuminate
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContentprogController extends Controller
{

 
    
    
    
    public function saveEdit($moduleId,$actionId,$programmationId){
        
        DB::table('contentprogs')->where('programmation_id', '=', $programmationId)->delete();
        
        $contentprog = new Contentprog();
        $contentprog->programmation_id = $programmationId;
        $contentprog->action_id =$actionId;
        $contentprog->module_id =$moduleId;
        $contentprog->save();
    
    }
    public function add($moduleId,$actionId){
        
        $progId=DB::table('Programmations')->select('id')->orderByDesc('id')
        ->limit(1)->get();
        
        
        
        $contentprog = new Contentprog();
        $contentprog->programmation_id = $progId[0]->id;
        $contentprog->action_id =$actionId;
        $contentprog->module_id =$moduleId;
        $contentprog->save();
           
    }
}

