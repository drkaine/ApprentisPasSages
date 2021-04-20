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
        $tag = new Tagalbum();
        $tag->photo_id = $request->id;
        $tag->nom_album = $request->nom;
        $tag->save();
    }

    function addPhoto($id,$nom)
    {
        $tag = new Tagalbum();
        $tag->photo_id = $id;
        $tag->nom_album = $nom;
        $tag->save();
    }
}
