<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membrestatuts extends Model
{
    use HasFactory;
    protected $table = "membrestatuts";

	public $timestamps = false;
    protected $fillable = [
        'statut_id', 'membre_id',
    ];

}
