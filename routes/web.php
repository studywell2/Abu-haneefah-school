<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdmissionController;


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/academics', function () {
    return view('pages.academics');
});

Route::get('/admissions', function () {
    return view('pages.admissions');
});

// This is the route the form uses
Route::post('/admissions-submit', [AdmissionController::class, 'submit'])->name('admissions.submit');

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/admissions-thankyou', [AdmissionController::class, 'thankyou'])->name('admissions.thankyou');
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');