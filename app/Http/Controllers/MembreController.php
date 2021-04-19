<?php

namespace App\Http\Controllers;
//controller
use App\Http\Controllers\MembreStatuController;
//Model
use App\Models\Membre;
//Illuminate
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MembreController extends Controller
{
    public function getOneTeam($teamId)
    {
    	$oneTeam = Membre::where('id','=',$teamId)->with('getMembre')->get();

       return view('pages.team', compact('oneTeam'));
    }
    
    public function saveEdit(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $membre = Membre::find($request->id);
        $membre->nom = $request->nom;
        $membre->prenom=$request->prenom;
        $membre->telephone=$request->telephone;
        $membre->email=$request->email;
        $membre->photo=$request->chemin;
        $membre->description=$request->description;
        $membre->save();
        return back();
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'prenom' => 'required',
            'nom' => 'required',
            'description' => 'required',
            'email' => 'required',
            'telephone' => 'required',
        ]);
        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $membre = new Membre();
        $membre->nom = $request->nom;
        $membre->prenom=$request->prenom;
        $membre->telephone=$request->telephone;
        $membre->email=$request->email;
        $membre->photo=$request->chemin;
        $membre->description=$request->description;
        $membre->save();
        
        for($i=1; $i<$request->compte+1; $i++)
        {
            $s="statt".$i;
            if($request->$s!=null){
                $stId="statutId".$i;
                $ms=new MembreStatutController();
                $ms->add($request->$stId);
            }
        }
        return redirect("accueil-admin");
    }
}
