<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MembreController extends Controller
{
    public function getOneTeam($teamId)
    {
    	$oneTeam = Membre::where('id','=',$teamId)->with('getMembre')->get();

       return view('pages.team', compact('oneTeam'));
    }

    
    
    
    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'description' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required'


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
        $membre->photo=$request->photo;
        $membre->description=$request->description;
        $membre->save();
        return redirect("accueil-admin");
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
        $membre->photo=$request->photo;
        $membre->description=$request->description;
        $membre->save();
        return back();
    }

}
