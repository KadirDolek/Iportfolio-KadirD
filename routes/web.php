<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomebackController;
use App\Http\Controllers\MailboxController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialsController;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Support\Facades\Route;
use App\Models\About;


Route::get('/', function () {
    $about = About::first();
    $skills = Skill::all();
    $portfolio= Portfolio::all();
    return view('welcome', compact('about', 'skills', 'portfolio'));
});

// FRONT END

Route::get('/about', [AboutController::class, 'index']);


Route::get('/contact', [ContactController::class, 'index']);


Route::get('/portfolio', [PortfolioController::class, 'index']);



Route::get('/services', [ServiceController::class, 'index']);

// BACK END

Route::get('/homeback', [HomebackController::class, 'index']);
// Route::get('/edit_profil/{id}',[HomebackController::class, 'edit'])->name('edit_profil');
Route::put('/update_profil/{id}',[HomebackController::class, 'update'])->name('update_profil');


Route::get('/mailbox', [MailboxController::class, 'index']);
Route::post('/storemail',[MailboxController::class, 'store'])->name('storemail');
Route::delete('/remove_mail/{id}',[MailboxController::class, 'destroy'])->name('remove_mail');


Route::get('/testimonials', [TestimonialsController::class, 'index']);


Route::get('/skill', [AboutController::class, 'indexskill']);
Route::post('/create',[AboutController::class, 'store'])->name('storeskill');

Route::get('portfolioback',[PortfolioController::class, 'indexback']);
Route::post('/create',[PortfolioController::class, 'store'])->name('storephoto');
Route::delete('/remove_photos/{id}',[PortfolioController::class, 'destroy'])->name('remove_photos');