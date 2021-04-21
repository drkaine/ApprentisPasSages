<?php

namespace App\Models;

use App\Models\Etiquettemodule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etiquette extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "etiquettes";

	public $timestamps = true;

    protected $fillable = [
        'nom', 'couleur',
    ];

    function getEtiquette()
    {
        return $this->belongsToMany('App\models\Etiquettemodule', 'id', 'etiquette_id');
    }
}
