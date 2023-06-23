<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restaurant\RestaurantController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function () {
    return view('wel');
});
Route::get('/about',function () {
    return view('restaurants.about');
});
Route::get('/book',function () {
    return view('restaurants.book');
});
Route::get('/',[RestaurantController::class, 'restaurants']);
Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::resource('restaurants',RestaurantController::class)->middleware('auth');
Route::post('restaurants/follow/{restaurant}',[RestaurantController::class,'follow'])->name('restaurants.follow');
Route::post('restaurants/{restaurant}/unfollow', [RestaurantController::class, 'unfollow'])->name('restaurants.unfollow');
// Route::put('/restaurants/{restaurant}', [RestaurantController::class,'update'])->name('restaurants.update');

// Route::get('/add', [App\Http\Controllers\HomeController::class, 'add'])->name('add');
// Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurant.index');
// Route::get('/restaurants/create', [RestaurantController::class, 'create'])->name('restaurant.create');
// Route::get('/restaurants', [RestaurantController::class, 'store'])->name('restaurant.store');
// Route::get('/restaurants/{id}/edit', [RestaurantController::class, 'edit'])->name('restaurant.edit');
// Route::get('/restaurants/{id}', [RestaurantController::class, 'show'])->name('restaurant.show');
// Route::put('/restaurants/{id}', [RestaurantController::class, 'update'])->name('restaurant.update');
// Route::delete('/restaurants/{id}', [RestaurantController::class, 'destroy'])->name('restaurant.destroy');

