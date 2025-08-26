<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tovar extends Model
{
    protected $fillable=['name', 'category', 'slug', 'price', 'image', 'description'];
}