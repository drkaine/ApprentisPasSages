<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;
    protected $table = "membres";

	public $timestamps = true;

    protected $fillable = [
        'id', 'nom', 'prenom','telephone','email','photo','description',
    ];

    // public function getMembre(){
    // 	return $this->belongsToMany('App\models\Statut', 'membrestatuts', 'membre_id','statut_id');
    // }

    public function getStatus(){
    	return $this->belongsToMany('App\models\Statut', 'membrestatuts', 'membre_id','statut_id');
    }
}
