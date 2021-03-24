<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiquettemodule extends Model
{
    use HasFactory;
    protected $table = "etiquettemodules";

	public $timestamps = true;

    protected $fillable = [
        'module_id', 'etiquette_id',
    ];

    function getEtiquetteModule()
    {
        return $this->belongsToMany('App\models\Module', 'module_id', 'id');
    }
}
