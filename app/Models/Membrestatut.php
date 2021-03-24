<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membrestatut extends Model
{
    use HasFactory;
    protected $table = "membrestatuts";

	public $timestamps = false;
    protected $fillable = [
        'statut_id', 'membre_id',
    ];
    function getMembreStatut(){
    	return $this->belongsTo('Membre', 'statut_id', 'membre_id');
    }
}
