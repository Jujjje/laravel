<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('app');
});

Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninjas.index');

Route::get('/ninjas/create', [NinjaController::class, 'create'])->name('ninjas.create');

Route::get('/ninjas/{ninja}', [NinjaController::class, 'show'])->name('ninjas.show');

Route::post('/ninjas', [NinjaController::class, 'store'])->name('ninjas.store');

Route::delete('/ninjas/{ninja}', [NinjaController::class, 'destroy'])->name('ninjas.destroy');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
