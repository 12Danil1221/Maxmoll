<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public function tovar(): HasMany
    {
        # One and Many
        return $this->hasMany(Tovar::class);
    }

    protected $fillable = ['name', 'slug'];
    
}