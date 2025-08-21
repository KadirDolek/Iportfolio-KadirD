<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomebackController;
use App\Http\Controllers\MailboxController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Route;
use App\Models\About;


Route::get('/', function () {
    $about=About::first();
    return view('welcome',compact('about'));
});

// FRONT END

Route::get('/about',[AboutController::class, 'index']);


Route::get('/contact',[ContactController::class, 'index']);


Route::get('/portfolio',[PortfolioController::class, 'index']);


Route::get('/services',[ServiceController::class, 'index']);

// BACK END

Route::get('/homeback',[HomebackController::class,'index']);


Route::get('/mailbox',[MailboxController::class,'index']);


Route::get('/testimonials',[TestimonialsController::class,'index']);


Route::get('/skill',[SkillController::class,'index']);