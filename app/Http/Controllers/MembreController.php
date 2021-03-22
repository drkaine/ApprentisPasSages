<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function getOneTeam($teamId)
    {
    	$oneTeam = Membre::where('id','=',$teamId)->with('getMembre')->get();

       return view('group_def', compact('oneTeam'));
    }

}
