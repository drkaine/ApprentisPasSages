<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moduleaction extends Model
{
    use HasFactory;
    protected $table = "moduleactions";

	public $timestamps = true;

    protected $fillable = [
        'module_id', 'action_id',
    ];
}
