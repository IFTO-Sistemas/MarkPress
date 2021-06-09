<?php

use App\Http\Controllers\{
    LectureController
};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/events',[LectureController::class, 'index'])->name('events');
Route::post('/events/cad',[LectureController::class, 'create'])->name('events.create');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
