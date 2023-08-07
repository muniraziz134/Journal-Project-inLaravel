<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaperController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\UserController;

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    Route::get('/', [homeController::class, 'show'])->name('home');
    Route::get('/home', [homeController::class, 'show'])->name('home');


    Route::resource('contact', ContactController::class);
    Route::resource('User', UserController::class, );

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


        Route::resource('paper', PaperController::class);

        Route::middleware('communityMember')->group(function () {
            Route::post('/published', [PaperController::class, 'publish'])->name('paper.publish');
            Route::middleware('admin')->group(function () {
                Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');

            });
            Route::post('/published', [PaperController::class, 'publish'])->name('paper.publish');
        });

    });

    Route::post('/download', [PaperController::class, 'download'])->name('paper.download');


    Route::get('/editorial', function () {
        return view('editorial');
    })->name('editorial');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');

    Route::get('/autherguide', function () {
        return view('autherguide');
    })->name('autherguide');




    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/signup', function () {
        return view('signup');
    })->name('signup');


    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    require __DIR__ . '/auth.php';

});