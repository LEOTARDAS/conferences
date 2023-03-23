<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

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
Route::view('/','home.index');

Route::resource('articles', ArticlesController::class)->only(['index','show']);
