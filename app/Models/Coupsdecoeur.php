<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupsdecoeur extends Model
{
    use HasFactory;
    protected $table = "coupsdecoeurs";
	protected $primaryKey = "id";
	public $timestamps = true;

    protected $fillable = [
        'id', 'categoriecoupdecoeur_id', 'lien','nom','description',
    ];

    function getCdc(){
    	return $this->belongsTo('App\models\Categoriecoupsdecoeur', 'categoriecoupsdecoeur_id', 'id');
    }
}
