<?php

namespace App\Http\Controllers;
//Model
use App\Models\Album;
//Illuminate
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\TagAlbumController;

class AlbumController extends Controller
{
    public function add(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required',            
        ]);
        if($validator->fails())
        {
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $Album = new Album();
        $Album->nom = $request->nom;
        $Album->save();
        $tag = new TagAlbumController();
        $tag->add($request);
        return redirect("galerie-admin");
    }
}
