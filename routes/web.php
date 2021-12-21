<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/nuestra-historia', [WebsiteController::class, 'about'])->name('about');
Route::get('/contactanos', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/servicios', [WebsiteController::class, 'services'])->name('services');
Route::post('/send-messsage', [WebsiteController::class, 'sendMessage'])->name('send-message');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
