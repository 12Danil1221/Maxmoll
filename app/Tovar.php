<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tovar extends Model
{

    public function category(): BelongsTo
    {
        # One and Many
        return $this->belongsTo(Category::class);
    }
    protected $fillable=['name', 'category', 'slug', 'price', 'image', 'description'];
}