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
    return view('welcome');
});

//route basic
Route::get('/about', function () {
    return '<h1>Hallooo</h1>'
        . 'Selamat Datang Di Web Saya <br>'
        . 'Laravel, Emang Keren';
});

Route::get('animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly","crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});