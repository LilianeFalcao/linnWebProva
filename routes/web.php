<?php

use App\Http\Livewire\SalaController;
use Illuminate\Support\Facades\Route;


Route::get('/', SalaController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
