<?php

namespace App\Http\Controllers;
//Model
use App\Models\Membre;
use App\Models\Statut;
use App\Models\Membrestatut;
//Illuminate
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MembreStatutController extends Controller
{
    public function getOneTeam($teamId)
    {
    	$oneTeam = Membre::where('id','=',$teamId)->with('getMembre')->get();

       return view('pages.team', compact('oneTeam'));
    }
    
    
    
    public function saveEdit(Request $request){
        
        DB::table('Membrestatuts')->where('membre_id', '=', $request->membreId)->delete();
        
        for($i=1; $i<$request->compte+1; $i++)
        {
            $s="statt".$i;
            if($request->$s!=null){
                $memStat = new Membrestatut();
                $memStat->membre_id = $request->membreId;
                
                $stId="statutId".$i;
                $memStat->statut_id =$request->$stId;
                $memStat->save();
            }
        }
        
        return back();
    
    }
    public function add($statutId){
        
        $membreId=DB::table('Membres')->select('id')->orderByDesc('id')
        ->limit(1)->get();
        
        
        
        $memStat = new Membrestatut();
        $memStat->membre_id = $membreId[0]->id;
        $memStat->statut_id =$statutId;
        $memStat->save();
           
    }
}

