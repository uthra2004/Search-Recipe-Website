<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    // Define the relationship with Ingredient
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }

    // Define the relationship with NutritionFact
    public function nutritionFacts()
    {
        return $this->hasOne(NutritionFact::class);
    }
}
