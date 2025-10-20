<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Services Page
Route::get('/services', function () {
    return view('services');
})->name('services');

// Solutions Page
Route::get('/solutions', function () {
    return view('solutions');
})->name('solutions');

// Academy Page
Route::get('/academy', function () {
    return view('academy');
})->name('academy');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// terms page
Route::get('/terms', function () {
    return view('terms');
})->name('terms');

// privacy page 
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');



Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');