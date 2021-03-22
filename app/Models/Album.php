<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = "albums";
	public $timestamps = true;

    protected $fillable = [
        'nom',
    ];

    function getAlbum(){
    	return $this->belongsTo('App\models\Tagalbum', 'nom', 'nom_album');
    }
}
