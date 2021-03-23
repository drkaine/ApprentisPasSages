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
	protected $primaryKey = "id";
	public $timestamps = true;

    protected $fillable = [
        "chemin"
    ];

    function getTagAlbum($nom){
    	return $this->belongsToMany('App\models\Tagalbum', 'photo_id', $id);
    }
}
