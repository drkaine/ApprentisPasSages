<?php

namespace App\Models;

use App\Models\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
