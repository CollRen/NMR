<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'nom',
        'user_id',
        'ingredient_id',
        'etape_id',

    ];
}
