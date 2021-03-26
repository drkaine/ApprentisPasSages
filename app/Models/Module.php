<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $table = "modules";

	public $timestamps = true;

    protected $fillable = [
        'id', 'img', 'temps','nom','description',"materiel","projetPeda","lieu","format",
    ];

    function getModule()
    {
        return $this->belongsToMany('App\models\Moduleaction', 'id', 'module_id');
    }

    function getProgs(){
    	return $this->belongsToMany('App\models\Programmation', 'contentprogs','programmation_id','programmation_id' );
    }
}
