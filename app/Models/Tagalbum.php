<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagalbum extends Model
{

    use HasFactory;
    protected $table = "tagalbums";
	protected $primaryKey = "id";
	public $timestamps = true;

    protected $fillable = [
        'module_id','nom_album',"photo_id"
    ];

    function getCCdc(){
    	return $this->belongsTo('App\models\Album', 'nom_album', 'nom');
    }
}
