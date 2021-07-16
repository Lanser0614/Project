<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'index'])->name('index');

Auth::routes();


Route::group(['prefix' => 'admin'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/teechers', [App\Http\Controllers\HomeController::class, 'teechers']);
    Route::get('/teechersAdd', [App\Http\Controllers\HomeController::class, 'teechersAdd']);
    Route::post('/teechersStore', [HomeController::class, 'teechersStore'])->name('teechersStore');
    Route::get('/SHow/{id}', [HomeController::class, 'teechersSHow']);
    Route::post('teechersUpdate', [HomeController::class, 'teechersUpdate'])->name('teechersUpdate');
    Route::get('teechersDestroy/{id}', [HomeController::class, 'teechersDestroy']);
    Route::get('table', [HomeController::class, 'table']);
    Route::get('tableAdd', [HomeController::class, 'tableAdd']);
    Route::post('tableStore', [HomeController::class, 'tableStore'])->name('tableStore');
    Route::get('tableShow/{id}', [HomeController::class, 'tableShow']);
    Route::post('tableUpdate', [HomeController::class, 'tableUpdate'])->name('tableUpdate');
    Route::get('tableDestroy/{id}', [HomeController::class, 'tableDestroy']);
    Route::get('logout', [HomeController::class, 'logout'])->name('logout');
});

