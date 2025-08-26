<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    public function tovar(): BelongsTo
    {
        # One and Many
        return $this->BelongsTo(Tovar::class);
    }

    protected $fillable = ['name', 'slug'];
    
}