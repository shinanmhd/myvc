<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', \App\Http\Controllers\DashboardController::class)->name('dashboard');
    Route::get('/timetable', \App\Http\Controllers\TimetableController::class)->name('timetable');

    Route::get('/profile/personal', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/academic', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit.academic');
    Route::get('/profile/documents', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit.documents');
    Route::patch('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [\App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
