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
    	return $this->belongsToMany('App\models\Module');
    }
    function getActions(){
    	return $this->belongsToMany('App\models\Action');
    }
    function getProgs(){
    	return $this->hasbelongsToMany('App\models\Programmation');
    }
}