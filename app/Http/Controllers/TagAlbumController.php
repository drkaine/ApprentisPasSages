<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Photo;
use App\Models\Tagalbum;
use Illuminate\Support\Facades\Validator;

class TagAlbumController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',         
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $tag = new Tagalbum();
        $tag->photo_id = $request->id;
        $tag->nom_album = $request->nom;
        $tag->save();
    }
}
