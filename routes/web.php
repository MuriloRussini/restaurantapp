<?php

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

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/menu', function () {
    return view('menu/menu');
});

Route::get('/app', function () {
    return view('pages/menu-index');
})->name('menu-index');

Route::get('/about', function () {
    return view('pages/about');
})->name('about');

Route::get('/giftcards', function () {
    return view('pages/giftcards');
})->name('giftcards');

Route::get('/offers', function () {
    return view('pages/offers');
})->name('offers');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
