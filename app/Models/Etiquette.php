<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiquette extends Model
{
    use HasFactory;
    protected $table = "etiquettes";

	public $timestamps = true;

    protected $fillable = [
        'nom', 'couleur',
    ];

    function getEtiquette()
    {
        return $this->belongsToMany('App\models\EtiquetteModule', 'id', 'etiquette_id');
    }
}
