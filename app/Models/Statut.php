<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "statuts";

	public $timestamps = true;

    protected $fillable = [
        'id', 'nom', 'description',
    ];

    function getMembre(){
    	return $this->belongsToMany('App\models\Membre', 'membrestatuts','statut_id', 'membre_id');
    }
}
