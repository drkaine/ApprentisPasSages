<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coupsdecoeur extends Model
{
    use HasFactory;
    use SoftDeletes;
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
