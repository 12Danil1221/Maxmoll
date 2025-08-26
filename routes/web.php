<?php

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TovarController;
use App\Tovar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function() {
    $tovars = Tovar::simplePaginate(6);
    $categories = Category::all();

    return view('welcome', compact('tovars', 'categories'));
});

// Display Card
Route::get('display_card', [TovarController::class, 'display_card'])->name('display_card');
//Add Tovar Card
Route::post('add_card', [TovarController::class, 'add_card'])->name('add_card');