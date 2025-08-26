<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tovar extends Model
{

    public function category(): HasMany
    {
        # One and Many
        return $this->hasMany(Category::class);
    }
    еуые
    protected $fillable=['name', 'category', 'slug', 'price', 'image', 'description'];
}