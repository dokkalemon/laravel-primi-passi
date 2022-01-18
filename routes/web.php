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


//HOME PAGE
Route::get('/', function () {
    return view('home', [
        'title' => 'Hello World',
        'text' => 'Ciao, questo il mio primo progetto Laravel',
    ]);
})->name('home');

//HOME PAGE
Route::get('about', function () {
    return view('about', [
        'aboutTitle' => 'Qui sono in about',
        'aboutText' => 'Ciao questa è la pagina about del mio primo progetto Laravel',
    ]);
})->name('about');
