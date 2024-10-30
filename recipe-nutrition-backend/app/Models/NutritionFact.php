<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionFact extends Model
{
    use HasFactory;

    protected $fillable = ['calories', 'protein', 'carbohydrates', 'fats'];

    // Define the relationship with Recipe
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
