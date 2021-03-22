<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membrestatut extends Model
{
    use HasFactory;
    protected $table = "membrestatuts";
	protected $primaryKey = ["membre_id","statut_id"];
	public $timestamps = false;
    protected $fillable = [
        'statut_id', 'membre_id',
    ];
    function getStatus(){
    	return $this->belongsTo('Membre', 'statut_id', 'id');
    }
}
