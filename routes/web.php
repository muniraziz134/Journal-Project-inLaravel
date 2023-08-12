<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaperController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\UserController;
use App\Models\Community_Members;

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
    Route::resource('paper', PaperController::class);

    Route::middleware('auth')->group(function () {
        Route::get('/profile/{id}', [UserController::class, 'create'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::resource('member',MemberController::class);
        Route::post('/published', [PaperController::class, 'publish'])->name('paper.publish');
    });

    Route::post('/download', [PaperController::class, 'download'])->name('paper.download');
    Route::get('/editorial', function () {
        return view('editorial',[
            'members'  => Community_Members::all()
        ]);
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
Route::prefix('admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/journals',[PagesController::class,'journal'])->name('journal');
    Route::get('/users',[PagesController::class,'user'])->name('user');
    Route::get('/editorial_members',[PagesController::class,'editorial_member'])->name('editorial_member');
    Route::get('/contact_messages',[PagesController::class,'contact_message'])->name('contact_message');
    Route::post('/toggle_journal',[PaperController::class,'ToggleJournalToView']);
});
Route::prefix('admin')->middleware(['auth','member'])->group(function () {
    Route::get('/member_dashboard', [PagesController::class, 'member_dashboard'])->name('memberdashboard');
});
