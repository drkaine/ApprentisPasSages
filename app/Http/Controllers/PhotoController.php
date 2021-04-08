<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Tagalbum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
{
    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required',            
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $photo = new Photo();
        $photo->chemin = $request->nom;
        $photo->save();
        $tag = new Tagalbum();
        // $tag->photo_id = $id;
        $tag->nom_album = $request->nom;
        return redirect("galerie-admin");
    }
}
