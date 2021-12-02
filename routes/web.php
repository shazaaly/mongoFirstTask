<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('comments', CommentController::class);
Route::get('/news/', [NewsController::class, 'index'])->name('news.index');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

//Route::resource('news', NewsController::class);


