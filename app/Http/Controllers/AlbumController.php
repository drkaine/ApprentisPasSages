<?php

namespace App\Http\Controllers;
//Model
use App\Models\Album;
//Illuminate
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class AlbumController extends Controller
{
    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required',            
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $Album = new Album();
        $Album->nom = $request->nom;
        $Album->save();
        $photo = new PhotoController();
        $photo->add($request);
        return redirect("galerie-admin");
    }
}
