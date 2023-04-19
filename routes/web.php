<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\Auth\LoginController;

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



Route::view('/contact','home.contact');
Route::get('/', [ConferenceController::class, 'index']);
Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');
Route::get('/', [ConferenceController::class, 'index'])->name('conference.index');
Route::get('/', [ConferenceController::class, 'index'])->name('conferences.index');
Route::get('/conferences/{id}', [ConferenceController::class, 'show'])->name('conference.show');
Route::get('/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
Route::put('/conferences/{conference}', [ConferenceController::class, 'update'])->name('conference.update');
Route::delete('/conferences/{id}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');





Auth::routes();

Route::get('login',[LoginController::class, 'showLoginForm'])->name('login');
Route::post('login',[LoginController::class, 'login']);
Route::post('logout',[LoginController::class, 'logout'])->name('logout');