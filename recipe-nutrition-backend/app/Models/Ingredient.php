<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    // Define the relationship with Recipe
    public function recipes()
    {
        return $this->belongsToMany(Recipe::class);
    }
}
