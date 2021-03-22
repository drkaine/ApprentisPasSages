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
        'nom', "description", "img",
    ];


}
