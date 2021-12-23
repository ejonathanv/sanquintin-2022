<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/nuestra-historia', [WebsiteController::class, 'about'])->name('about');
Route::get('/contactanos', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/servicios', [WebsiteController::class, 'services'])->name('services');
Route::post('/enviar-mensaje', [WebsiteController::class, 'sendMessage'])->name('send-message');
Route::get('/refrescar-captcha', [WebsiteController::class, 'refreshCaptcha'])->name('refresh-captcha');
Route::get('/politicas-de-privacidad', [WebsiteController::class, 'privacyPolicies'])->name('privacy-policies');
Route::get('/cotizar', [WebsiteController::class, 'getQuote'])->name('quote');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
