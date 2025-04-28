<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\BenchmarkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Forgot
use App\Http\Controllers\Auth\ResetCpfPasswordController;
 
Route::get('/reset-cpf', [ResetCpfPasswordController::class, 'showResetForm'])->name('password.cpf.form');
Route::post('/reset-cpf', [ResetCpfPasswordController::class, 'reset'])->name('password.cpf.reset');


Route::get('/telamain', function () {
    return view('auth/telamain'); // ou o controller que você usa
})->name('telamain')->middleware('auth');

Route::get('/telainicio', function () {
    return view('auth/telainicio'); // ou o controller que você usa
})->name('telainicio')->middleware('auth');

Route::get('/telaeditar', function () {
    return view('auth/telaeditar'); // ou o controller que você usa
})->name('telaeditar')->middleware('auth');

Route::get('/telaperfil', function () {
    return view('auth/telaperfil'); // ou o controller que você usa
})->name('telaperfil')->middleware('auth');





Route::get('/benchmark/{game}', [BenchmarkController::class, 'show'])->name('telabenchmark.show');
Route::post('/benchmark/{game}', [BenchmarkController::class, 'calcular'])->name('telabenchmark.calcular');

