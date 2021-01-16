<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealIngredient extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function meals()
    {
        return $this->belongsToMany('Meal', 'meal_ingredients', 'meal_id', 'ingredient_id');
    }
    public function ingredients()
    {
        return $this->belongsToMany('Ingredient', 'meal_ingredients', 'meal_id', 'ingredient_id');
    }
}
