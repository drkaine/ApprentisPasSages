<?php

namespace App\Models;

use App\Models\Album;
use App\Models\Action;
use App\Models\Etiquette;
use App\Models\Programmation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "modules";

	public $timestamps = true;

    protected $fillable = [
        'id', 'img', 'temps','nom','description',"materiel","projetPeda","lieu","format",
    ];

    function getProgs(){
    	return $this->belongsToMany('App\models\Programmation', 'contentprogs','module_id','programmation_id' );
    }

    function getEtiquettes(){
    	return $this->belongsTo('App\models\Etiquette', 'etiquettes','module_id','etiquette_id' );
    }

    function getActions(){
    	return $this->belongsTo('App\models\Action', 'actions','module_id','action_id' );
    }

    function getAlbum(){
    	return $this->belongsToMany('App\models\Album', 'albums','module_id','nom_album' );
    }
}
