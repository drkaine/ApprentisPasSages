<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actioncatalogue extends Model
{
    use HasFactory;
    protected $table = "actioncatalogues";

	public $timestamps = true;

    protected $fillable = [
        'action_id', 'catalogue_id',
    ];

    function getAction()
    {
        return $this->belongsToMany('App\models\Action', 'action_id', 'id');
    }

    function getCatalogue()
    {
        return $this->belongsToMany('App\models\Catalogue', 'catalogue_id', 'id');
    }
}
