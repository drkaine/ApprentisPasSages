<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;
    protected $table = "catalogues";
	public $timestamps = true;

    protected $fillable = [
       "id", 'nom', "description", "img",
    ];

    function getAction()
    {
        return $this->belongsTo('App\models\Action',"actioncatalogues" ,'catatalogue_id', 'action_id');
    }
}
