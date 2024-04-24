<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'ingredient_id',
        'etape_id',
        'user_id'
    ];
}
