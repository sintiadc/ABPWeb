<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    // Specify which attributes are mass assignable
    protected $fillable = [
        'name',
        'picture',
        'calories',
        'ingredients',
        'servings',
        'prep_time',
        'meal',
        'health',
        'detail_resep',
        'like'
    ];
}
