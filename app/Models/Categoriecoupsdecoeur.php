<?php

namespace App\Models;

use App\Models\Coupsdecoeur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoriecoupsdecoeur extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $table = "categoriecoupsdecoeurs";
	protected $primaryKey = "id";
	public $timestamps = true;

    protected $fillable = [
        'id','nom',
    ];

    function getCCdc(){
    	return $this->belongsTo('App\models\Coupsdecoeur', 'id', 'id');
    }
}
