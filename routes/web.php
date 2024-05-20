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
    $icons = config('section-icon');
    $comics = config('comics');
    $links = config('useful-link');
    $data = [
        'icons' => $icons,
        'comics' => $comics,
        'links' => $links,
    ];
    return view('home', $data);
})->name('home');
