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

    public function getPhoto()
    {
    	return $this->belongsToMany('App\models\Photo',"tagalbums", 'nom_album', 'photo_id');
    }
}
