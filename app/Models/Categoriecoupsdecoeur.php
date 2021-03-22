<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoriecoupsdecoeur extends Model
{

    use HasFactory;
    protected $table = "categoriecoupsdecoeurs";
	protected $primaryKey = "id";
	public $timestamps = true;

    protected $fillable = [
        'id','nom',
    ];

    function getCCdc(){
    	return $this->belongsTo('App\models\Categoriecoupsdecoeur', 'id', 'id');
    }
}
