<?php

use App\Http\Controllers\Community_memberController;

use App\Http\Controllers\HelperController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User_ContactController;
use App\Http\Controllers\homeController;

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

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/home',[homeController::class,'show'])->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/editorial', function () {
    return view('editorial');
})->name('editorial');

Route::get('/blog', [PaperController::class,'showPosts'])->name('blog');



Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/autherguide', function () {
    return view('autherguide');
})->name('autherguide');

Route::get('/addpaper', function () {
    return view('addpaper');
})->name('addpaper');




Route::resource('paper', PaperController::class);

Route::resource('User', UserController::class);

Route::resource('User_Contact', User_ContactController::class);

Route::resource('Community_Members', Community_memberController::class);