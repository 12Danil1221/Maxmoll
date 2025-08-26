<?php

use App\Category;
use App\Http\Controllers\CategoryController;
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
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/welcome', function() {
    $tovars = Tovar::simplePaginate(6);
    $categories = Category::all();

    return view('welcome', compact('tovars', 'categories'));
});

// Display Card
Route::get('display_card', [TovarController::class, 'display_card'])->name('display_card');
//Add Tovar Card
Route::post('add_card', [TovarController::class, 'add_card'])->name('add_card');
//Display Category Tovars
Route::get('display_category_tovars/{category}', [CategoryController::class, 'display_category_tovars'])->name('display_category_tovars');
//Display Detail Tovar
Route::get('display_detail_tovar/{tovar}', [TovarController::class, 'display_detail_tovar'])->name('display_detail_tovar');
//Delete Tovar Card
Route::delete('destroy_card/{card}', [TovarController::class, 'destroy_card'])->name('destroy_card');

});