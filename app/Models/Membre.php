<?php

namespace App\Models;

use App\Models\Statut;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Membre extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "membres";

	public $timestamps = true;

    protected $fillable = [
        'id', 'nom', 'prenom','telephone','email','photo','description',
    ];

    public function getStatus(){
    	return $this->belongsToMany('App\models\Statut', 'membrestatuts', 'membre_id','statut_id');
    }
}
