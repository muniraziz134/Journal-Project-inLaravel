<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BlogController::class, 'index'])->name('home');


Route::resource('contact', ContactController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



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


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::resource('paper', PaperController::class);

Route::resource('User', UserController::class);

Route::resource('User_Contact', User_ContactController::class);

Route::resource('Community_Members', Community_memberController::class);
require __DIR__.'/auth.php';
