<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;
    protected $table = "actions";
	protected $primaryKey = "id";
	public $timestamps = true;

    protected $fillable = [
        'id', 'nom', 'description','img'
    ];

    function getModules(){
    	return $this->belongsToMany('App\models\Module', 'contentprogs', 'module_id','module_id' );
    }
    function getProgs(){
    	return $this->belongsToMany('App\models\Programmation', 'contentprogs','programmation_id','programmation_id' );
    }
}
