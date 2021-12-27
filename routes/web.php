<?php


//use App\Http\Controllers\AdminController;
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
//adminauth
//Route::get('admin-login', [App\Http\Controllers\Auth\AdminAuthController::class, 'getLogin'])->name('adminLogin');
//Route::post('admin-login', 'App\Http\Controllers\Auth\AdminAuthControlle@postLogin')->name('adminLoginPost');
//Route::get('admin-logout', 'App\Http\Controllers\Auth\AdminAuthControlle@logout')->name('adminLogout');
//
//Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
//    // Admin Dashboard
//    // Admin
//
//
//});



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');


/*search*/
Route::get('/search/', 'HomeController@search')->name('search')->middleware('auth');

/*countries*/
//Route::get('/signup', [CountryController::class, 'index'])->middleware('auth')->name('register');


Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/AboutUs', function () {
    return view('about');
})->name('about');

Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class, 'show'])->middleware('auth')->name('profile');
Route::put('/profile/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('profile.update');
Route::get('/profile/setting/{id}', [App\Http\Controllers\HomeController::class, 'setting'])->name('setting');
Route::resource('/posts', PostController::class)->middleware('auth');

Route::resource('/follows', FollowController::class);

Route::get('/trending', [TrendingController::class, 'index'])->middleware('auth')->name('trending');

Route::resource('comments', CommentController::class);
Route::resource('likes', LikeController::class);


/*countries*/
Route::resource('/signup', CountryController::class,)->name('register', 'index');

Route::post('/like-post/{id}', [App\Http\Controllers\PostController::class, 'likePost'])->name('like.post');
Route::post('/unlike-post/{id}', [App\Http\Controllers\PostController::class, 'unlikePost'])->name('unlike.post');

Route::resource('/admoon', AdminController::class);
Route::get('/admooon', [App\Http\Controllers\AdminController::class, 'index2'])->name('admooon');
Route::get('/manageadmoon', [App\Http\Controllers\AdminController::class, 'index3'])->name('admoonprofile');
