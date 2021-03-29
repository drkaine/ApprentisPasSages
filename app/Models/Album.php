<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;
    use SoftDeletes;
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
