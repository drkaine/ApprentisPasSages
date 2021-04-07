<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catalogue extends Model
{
    use HasFactory;
    use SoftDeletes;
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
