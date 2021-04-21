<?php

namespace App\Models;

use App\Models\Categoriecoupsdecoeur;
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
    	return $this->belongsTo('App\Models\Categoriecoupsdecoeur', 'categoriecoupsdecoeur_id', 'id');
    }
}
