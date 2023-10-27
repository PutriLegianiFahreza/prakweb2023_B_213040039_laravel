<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/', function () {
    return view('about', [
        "name" => "Putri Legiani",
        "email" => "putrilegiani234@gmailcom",
        "image" => "Logounpas.jpg"
    ]);
});

Route::get('/', function () {
    return view('posts');
});