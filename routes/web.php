<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CountryController;
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

// Route::get('/', function () {
//     return view('home');
// })->middleware('auth')->name('home');
//Route::get('/', static function () {return view('feed');})->middleware('auth');

Auth::routes();



// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');


/*search*/
Route::get('/search/', 'App\Http\Controllers\HomeController@search')->name('search')->middleware('auth');

/*countries*/
Route::get('/reg', [CountryController::class, 'index'])->middleware('auth')->name('register');


Route::get('/chat', function () {
    return view('chat');
})->name('chat');


Route::get('/trending', function () {
    return view('trending');
})->name('trending');

// Route::get('/setting', function () {
//     return view('setting');
// })->name('setting');

Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('profile');
Route::put('/profile/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('profile.update');
Route::get('/profile/setting/{id}', [App\Http\Controllers\HomeController::class, 'setting'])->name('setting');
Route::resource('/posts', 'App\Http\Controllers\PostController');
// Route::resource('/follows', 'App\Http\Controllers\FollowController');
// Route::post('/follows/{id}', [App\Http\Controllers\FollowController::class, 'store'])->name('follow');
// Route::post('/follows/delete/{id}', [App\Http\Controllers\FollowController::class, 'destroy'])->name('UnFollow');
Route::resource('/follows', 'App\Http\Controllers\FollowController');



Route::resource('comments', CommentController::class);

/*countries*/
Route::get('/reg', [CountryController::class, 'index']);

Route::post('/like-post/{id}',[PostController::class,'likePost'])->name('like.post');
Route::post('/unlike-post/{id}',[PostController::class,'unlikePost'])->name('unlike.post');


// Admin 

    Route::get('admin/login','Auth\AdminAuthController@getLogin')->name('adminLogin');
    Route::post('admin/login', 'Auth\AdminAuthController@postLogin')->name('adminLoginPost');
    Route::get('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');

	Route::get('dashboard','AdminController@dashboard')->middleware('admon')->name('dashboard');	


