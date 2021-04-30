<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;


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
    return view('introduction/welcome');
})->name('welcome');

// ------------------Route Prefixes-------------------------
Route::prefix('superstar')-> group(function() {
    Route::get('/me', function () {
        echo "This is Me"; // Run in the browser: localhost:xxxx/supserstar/me
    });
    Route::get('/you', function () {
        echo "This is you"; // Run in the browser: localhost:xxxx/supserstar/you
    });
});

// -----------------Middleware Part--------------------------
/**
 * Route Middleware
*/
Route::get('home', function () {
    echo 'You are in Home page';
});

Route::get('/about', function() {
    // echo 'It is about page';
    return view('introduction/about');
})->middleware('test');

Route::get('/contact', function() {
    // echo 'It is Contact page';
    return view('introduction/contact');
})->middleware('test');

/**
 * Group Middleware
 */
Route::middleware(['test'])->group(function () {

        Route::get('/one', function () {
            echo "This is One"; // Run in the browser: localhost:xxxx/supserstar/me
        });
        Route::get('/two', function () {
            echo "This is Two"; // Run in the browser: localhost:xxxx/supserstar/you
        });

});

// -------------------Controller Introduction------------------------

Route::get('/blog', [FirstController::class, 'firstMethod']);


// -------------URL, URL::to, route and encryption------------------------

Route::get('/four', [FirstController::class, 'fourMethod'])->name('iv');
Route::get(md5('/six'), [FirstController::class, 'sixMethod'])->name('vi');


/**
 * Extends, Yeield & Section Tutorial
 * Folder: views/extends
 */
//----------------------------------------------------------------

Route::get('/index', [FirstController::class, 'extendIndex'])->name('extend');
Route::get('/about-us', [FirstController::class, 'extendAbout'])->name('about_extend');
Route::get('/contact-us', [FirstController::class, 'extendContact'])->name('contact_extend');
