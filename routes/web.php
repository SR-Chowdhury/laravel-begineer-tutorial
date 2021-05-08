<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\CleanBlogController;


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
 * Extends, yeield & Section Tutorial
 * Folder: views/extends
 */
//----------------------------------------------------------------

Route::get('/index', [FirstController::class, 'extendIndex'])->name('extend');
Route::get('/about-us', [FirstController::class, 'extendAbout'])->name('about_extend');
Route::get('/contact-us', [FirstController::class, 'extendContact'])->name('contact_extend');


/**
 * Clean Blog Route Here
 */
Route::get('/welcome-blog', [CleanBlogController::class, 'home'])->name('blog-home');
Route::get('/blog-index', [CleanBlogController::class, 'index'])->name('blog-index');
Route::get('/blog-about', [CleanBlogController::class, 'about'])->name('blog-about');
Route::get('/blog-post', [CleanBlogController::class, 'post'])->name('blog-post');
Route::get('/write-post', [CleanBlogController::class, 'write'])->name('write-post');
Route::get('/blog-contact', [CleanBlogController::class, 'contact'])->name('blog-contact');

// Category CRUD
Route::get('/blog-add-category', [CleanBlogController::class, 'addCategory'])->name('blog-add-category');
Route::get('/blog/all-category', [CleanBlogController::class, 'showCategory'])->name('blog-show-category');
Route::post('/blog/Store/Category', [CleanBlogController::class, 'insertCategory'])->name('blog-insert-category');
Route::get('/view/Category/{id}', [CleanBlogController::class, 'singleData']);
Route::get('/edit/Category/{id}', [CleanBlogController::class, 'editSingleData']);
Route::post('/update/Category/{id}', [CleanBlogController::class, 'updateSingleData']);
Route::get('/delete/Category/{id}', [CleanBlogController::class, 'deleteSingleData']);


