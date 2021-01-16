<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Ingredient;
use App\Models\Table;

class Meal extends Model
{
    protected $guarded = [];
    protected $table = 'meals';

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function ingredients()
    {
        return $this->belongsToMany('Ingredient', 'meal_ingredients', 'meal_id', 'ingredient_id');
    }
    public function tags()
    {
        return $this->belongsToMany('Tag', 'meal_tags', 'meal_id', 'tag_id');
    }
}
