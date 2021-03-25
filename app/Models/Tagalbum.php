<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagalbum extends Model
{

    use HasFactory;
    protected $table = "tagalbums";

	public $timestamps = true;

    protected $fillable = [
        'module_id','nom_album',"photo_id"
    ];

    // function getTagAlbum(){
    // 	return $this->belongsToMany('App\models\Album', 'nom_album', "nom");
    // }
}
