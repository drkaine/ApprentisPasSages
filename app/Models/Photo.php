<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table = "photos";

	public $timestamps = true;

    protected $fillable = [
        "chemin"
    ];

    function getAlbum(){
    	return $this->belongsToMany('App\models\Album', "tagalbums",'nom_album', "photo_id");
    }
}
