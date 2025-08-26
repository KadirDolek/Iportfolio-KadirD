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
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Support\Facades\Route;
use App\Models\About;




Route::get('/', function () {
    $about = About::first();
    $skills = Skill::all();
    $portfolio= Portfolio::all();
    $services= Service::all();
    return view('welcome', compact('about', 'skills', 'portfolio','services'));
});

// FRONT END

Route::get('/about', [AboutController::class, 'index']);


Route::get('/contact', [ContactController::class, 'index']);


Route::get('/portfolio', [PortfolioController::class, 'index']);



Route::get('/services', [ServiceController::class, 'index']);
Route::get('/backservices', [ServiceController::class, 'indexback']);
Route::post('/create_services', [ServiceController::class, 'store'])->name('storeservice');
Route::delete('/remove_services/{id}',[ServiceController::class, 'destroy'])->name('remove_services');

// BACK END

Route::get('/homeback', [HomebackController::class, 'index']);
// Route::get('/edit_profil/{id}',[HomebackController::class, 'edit'])->name('edit_profil');
Route::put('/update_profil/{id}',[HomebackController::class, 'update'])->name('update_profil');


Route::get('/mailbox', [MailboxController::class, 'index']);
Route::post('/storemail',[MailboxController::class, 'store'])->name('storemail');
Route::delete('/remove_mail/{id}',[MailboxController::class, 'destroy'])->name('remove_mail');


Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials.index');
Route::get('testimonials/create', [TestimonialsController::class, 'create'])->name('testimonials.create');
Route::post('testimonials', [TestimonialsController::class, 'store'])->name('testimonials.store');
Route::get('testimonials/{id}/edit', [TestimonialsController::class, 'edit'])->name('testimonials.edit');
Route::put('testimonials/{id}', [TestimonialsController::class, 'update'])->name('testimonials.update');
Route::delete('testimonials/{id}', [TestimonialsController::class, 'destroy'])->name('testimonials.destroy');


Route::get('/skill', [AboutController::class, 'indexskill']);
Route::post('/create_skill',[AboutController::class, 'store'])->name('storeskill');
Route::delete('/remove_skill/{id}',[AboutController::class, 'destroy'])->name('remove_skill');

Route::get('portfolioback',[PortfolioController::class, 'indexback']);
Route::post('/create',[PortfolioController::class, 'store'])->name('storephoto');
Route::delete('/remove_photos/{id}',[PortfolioController::class, 'destroy'])->name('remove_photos');