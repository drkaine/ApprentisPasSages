<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "statuts";
	protected $primaryKey = "id";
	public $timestamps = true;

    protected $fillable = [
        'id', 'nom', 'description',
    ];

    function getStatut(){
    	return $this->belongsToMany('Membre', 'membrestatuts', 'statut_id','membre_id');
    }
}
