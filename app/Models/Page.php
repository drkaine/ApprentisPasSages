<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = "pages";
	protected $primaryKey = "id";
	public $timestamps = true;

    protected $fillable = [
        'nom', 'contenu',
    ];
}
