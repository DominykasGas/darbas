<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ConferenceController as AdminConferenceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('client')->name('client.')->group(function () {
    Route::get('/conferences', [ClientController::class, 'index'])->name('conferences.index');
    Route::get('/conferences/{id}', [ClientController::class, 'show'])->name('conferences.show');
    Route::post('/conferences/{id}/register', [ClientController::class, 'register'])->name('conferences.register');
});

Route::prefix('employee')->name('employee.')->group(function () {
    Route::get('/conferences', [EmployeeController::class, 'index'])->name('conferences.index');
    Route::get('/conferences/{id}', [EmployeeController::class, 'show'])->name('conferences.show');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('/{id}', [UserController::class, 'update'])->name('update');
    });

    Route::prefix('conferences')->name('conferences.')->group(function () {
        Route::get('/', [AdminConferenceController::class, 'index'])->name('index');
        Route::get('/create', [AdminConferenceController::class, 'create'])->name('create');
        Route::post('/', [AdminConferenceController::class, 'store'])->name('store');
        Route::get('/{id}', [AdminConferenceController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [AdminConferenceController::class, 'edit'])->name('edit');
        Route::put('/{id}', [AdminConferenceController::class, 'update'])->name('update');
        Route::delete('/{id}', [AdminConferenceController::class, 'destroy'])->name('destroy');
    });
});
