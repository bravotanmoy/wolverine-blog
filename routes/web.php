<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\BlogController;

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
    return view('dashboard');
});


Route::get('/blank', function () {
    return view('pages-starter');
});


  // Blog Post
  Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
      Route::resource('post', BlogController::class);
      Route::resource('category', BlogController::class);
});

