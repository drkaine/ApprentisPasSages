<?php

namespace App\Models;

use App\Models\Module;
use App\Models\Catalogue;
use App\Models\Programmation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Action extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "actions";
	protected $primaryKey = "id";
	public $timestamps = true;

    protected $fillable = [
        'id', 'nom', 'description','img'
    ];

    function getModules(){
    	return $this->belongsTo('App\models\Module', 'contentprogs', 'module_id','module_id' );
    }
    function getProgs(){
    	return $this->belongsToMany('App\models\Programmation', 'contentprogs','programmation_id','programmation_id' );
    }
    function getCatalogues(){
    	return $this->belongsTo('App\models\Catalogue', 'catalogues','action_id','catalogue_id' );
    }
}
