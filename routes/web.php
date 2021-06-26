<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    EventController,
    PostsController,
    FormsLectureController
};
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [EventController::class, 'index'])->name('Home');

Route::get('/search', [PostsController::class, 'search'])->name('search');

Route::get('/lecture/{id}', [FormsLectureController::class, 'show']);
// Route::post('/lecture/{id}', [FormsLectureController::class, 'create'])->name('lecture.cad');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
