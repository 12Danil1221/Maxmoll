<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tovar;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function display_category_tovars(Category $category, Tovar $tovar)
    {
        # Display Category Tovars
        $categories = Category::all();
        $tovars = Tovar::where('category', $category->id)->get();

        return view('display_category_tovars', compact('tovars', 'categories'));
    }
}