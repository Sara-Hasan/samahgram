<?php

//use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\CommentController;

//use App\Http\Controllers\AdminController;


use App\Http\Controllers\TrendingController;
//use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\CountryController;
/*
|--------------------------------------------------------------------------
| Web Routes
@@ -17,32 +20,57 @@
|
*/


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');


/*search*/
Route::get('/search/', 'App\Http\Controllers\HomeController@search')->name('search')->middleware('auth');

/*countries*/
//Route::get('/signup', [CountryController::class, 'index'])->middleware('auth')->name('register');


Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/AboutUs', function () {
    return view('about');
})->name('about');

Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('profile');
Route::put('/profile/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('profile.update');
Route::get('/profile/setting/{id}', [App\Http\Controllers\HomeController::class, 'setting'])->name('setting');
Route::resource('/posts', PostController::class);

Route::resource('/follows', FollowController::class);

Route::get('/trending', [TrendingController::class, 'index'])->name('trending');

Route::resource('comments', CommentController::class);
Route::resource('likes', LikeController::class);


/*countries*/
Route::resource('/signup', CountryController::class, )->name('register','index');

Route::post('/like-post/{id}',[App\Http\Controllers\PostController::class,'likePost'])->name('like.post');
Route::post('/unlike-post/{id}',[App\Http\Controllers\PostController::class,'unlikePost'])->name('unlike.post');

// Admin
Route::resource('/admoon', AdminController::class);
Route::get('/admooon', [App\Http\Controllers\AdminController::class, 'index2'])->name('admooon');
Route::get('/manageadmoon', [App\Http\Controllers\AdminController::class, 'index3'])->name('admoonprofile');
