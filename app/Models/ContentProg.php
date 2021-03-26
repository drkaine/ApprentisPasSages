<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




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