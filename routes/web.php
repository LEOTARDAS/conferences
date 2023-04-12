<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ConferenceController;

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

//Route::get('/', function () {
//    return view('home.index');
//})->name('hone.index');

//    Route::get('/contact', function(){
//        return view('home.contact');
//    })->name('home.contact');

Route::view('/contact','home.contact');
Route::get('/', [ConferenceController::class, 'index']);
Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');
Route::get('/conferences', [ConferenceController::class, 'index'])->name('conference.index');
Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');
Route::get('/conferences/{id}', [ConferenceController::class, 'show'])->name('conference.show');
Route::get('/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
Route::put('/conferences/{conference}', [ConferenceController::class, 'update'])->name('conference.update');
Route::delete('/conferences/{id}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');

Route::resource('articles', ArticlesController::class)->only(['create','show','index','store','edit','update']);

Route::get('articles/create', [ArticlesController::class, 'create'])->name('articles.create');
Route::post('articles/store', [ArticlesController::class, 'store'])->name('articles.store');


