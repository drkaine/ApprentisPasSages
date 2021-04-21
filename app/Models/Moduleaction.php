<?php

namespace App\Models;

use App\Models\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Moduleaction extends Model
{
    use HasFactory;
    protected $table = "moduleactions";

	public $timestamps = true;

    protected $fillable = [
        'module_id', 'action_id',
    ];

    function getModuleAction()
    {
        return $this->belongsToMany('App\models\Module', 'module_id', 'id');
    }
}
