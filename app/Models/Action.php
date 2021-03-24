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
        'nom', 'description','img',
    ];

    function getAction()
    {
        return $this->belongsToMany('App\models\Moduleaction', 'id', 'action_id');
    }

    function getActionCatalogue()
    {
        return $this->belongsToMany('App\models\Actioncatalogue', 'id', 'action_id');
    }
}
