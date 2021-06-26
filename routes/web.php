<?php

use App\Http\Controllers\{
    EventController,
    PostsController,
    FormsLectureController
};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Utilização do Middleware para redução de acesso a quem não é um usuario autenticado.
Route::middleware(['auth'])->group(function(){



});


Route::get('/', [EventController::class, 'index'])->name('Home');
Route::get('/search', [PostsController::class, 'search'])->name('search');
Route::get('/lecture', [FormsLectureController::class, 'formlecture'])->name('formlecture');
Route::post('/lecture/{id}', [FormsLectureController::class, 'create'])->name('lecture.cad');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
