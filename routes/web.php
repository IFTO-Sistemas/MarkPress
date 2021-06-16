<?php

use App\Http\Controllers\{
    LectureController,
    HomeController
};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Utilização do Middleware para redução de acesso a quem não é um usuario autenticado.
Route::middleware(['auth'])->group(function(){

    Route::get('/events', [LectureController::class, 'index'])->name('events');
    Route::post('/events/cad', [LectureController::class, 'create'])->name('events.create');

});


// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('.home.welcome');
})->name('Home');

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
