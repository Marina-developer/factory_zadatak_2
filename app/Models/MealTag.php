<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealTag extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function tags()
    {
        return $this->belongsToMany('Tag', 'meal_tags', 'meal_id', 'tag_id');
    }
    public function meals()
    {
        return $this->belongsToMany('Meal', 'meal_tags', 'meal_id', 'tag_id');
    }
}
