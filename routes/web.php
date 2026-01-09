<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminTicketController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [TicketController::class, 'index'])->name('dashboard');

    Route::get('/tickets/create', [TicketController::class, 'create']);
    Route::post('/tickets', [TicketController::class, 'store']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/tickets', [AdminTicketController::class, 'index']);
    Route::patch('/admin/tickets/{ticket}', [AdminTicketController::class, 'update']);
});

require __DIR__.'/auth.php';