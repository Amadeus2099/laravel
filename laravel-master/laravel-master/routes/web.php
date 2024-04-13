<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfrastructureResponseController;

Route::get('/infraestructura', [InfrastructureResponseController::class, 'showForm'])->name('infraestructura.form');
Route::post('/infraestructura', [InfrastructureResponseController::class, 'store'])->name('infraestructura.store');
//Route::post('/guardar_respuestas', [InfrastructureResponseController::class, 'store'])->name('guardar_respuestas');
Route::get('/', function () {
    return view('infraestructura');
});

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';*/
