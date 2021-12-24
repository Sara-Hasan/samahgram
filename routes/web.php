<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
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

Route::get('/', static function () {return view('feed');})->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
/*search*/
Route::get('/search/', 'HomeController@search')->name('search');

Route::get('/', static function () {
        return view('profile');
    });
    Route::get('/chat', static function () {
        return view('chat');
    });
