<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/search-result', function () {
    return view('search_result');
});

Route::get('/property', function () {
    return view('property');
});


Route::get('/rent', function () {
    return view('rent');
})->name('rent');

Route::get('/sale', function () {
    return view('sale');
})->name('sale');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');




Route::get('/user-dashboard', [AgentController::class, 'index'])->name('userDashboard');
Route::get('/add-property', [AgentController::class, 'createPoperty'])->name('addProperty');
Route::get('/my-properties', [AgentController::class, 'myPoperty'])->name('myProperty');
Route::get('/my-profile', [AgentController::class, 'myProfile'])->name('myProfile');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
