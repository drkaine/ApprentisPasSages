<?php

namespace App\Models;

use App\Models\Action;
use App\Models\Module;
use App\Models\Programmation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;




class ContentProg extends Model
{
    use HasFactory;
    protected $table = "contentprogs";
	    protected $primaryKey = 'id';
    protected $fillable = [
        'programmation_id', 'module_id', 'action_id'
    ];

    
    function getModules(){
    	return $this->hasMany('App\models\Module','id','module_id');
    }
    function getActions(){
    	return $this->hasMany('App\models\Action','id','action_id');
    }
    function getProgs(){
    	return $this->hasMany('App\models\Programmation','id','programmation_id');
    }
}