<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CommentController;

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

Route::get('/', function () {
    return view('home');
})->middleware('auth');
//Route::get('/', static function () {return view('feed');})->middleware('auth');

Auth::routes();

<<<<<<< HEAD
Route::get('/home', [HomeController::class, 'index'])->name('home');
=======
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
>>>>>>> 72ebb1a6117678875706d3e8152196ee5ab8e702

/*search*/
Route::get('/search/', 'App\Http\Controllers\HomeController@search')->name('search')->middleware('auth');;

/*countries*/
Route::get('/', [CountryController::class, 'index'])->middleware('auth');;


Route::get('/chat', function () {
   return view('chat');
})->name('chat');


 Route::get('/trending', function () {
    return view('trending');
 })->name('trending');

 Route::get('/setting', function () {
    return view('setting');
 })->name('setting');

Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('profile');
Route::resource('/posts', 'App\Http\Controllers\PostController');

Route::resource('comments', CommentController::class);

/*countries*/
Route::get('/reg', [CountryController::class, 'index']);

Route::get('/', static function () {
        return view('profile');
    })->middleware('auth');;
    Route::get('/chat', static function () {
        return view('chat');
    })->middleware('auth');;
