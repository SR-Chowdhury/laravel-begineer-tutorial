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

Route::get('/about', function() {
    // echo 'It is about page';
    return view('introduction/about');
});

Route::get('/contact', function() {
    // echo 'It is Contact page';
    return view('introduction/contact');
});

// Route Prefixes
Route::prefix('superstar')-> group(function() {
    Route::get('/me', function () {
        echo "This is Me"; // Run in the browser: localhost:xxxx/supserstar/me
    });
    Route::get('/you', function () {
        echo "This is you"; // Run in the browser: localhost:xxxx/supserstar/you
    });
});

