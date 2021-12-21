<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tiketController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('tiket', function () {
    return view('tiket');
});

Route::view('/about','about')->name('about');

Route::post('home/reserve', [tiketController::class, 'reserve'])->name('reserve');
Route::post('cek', [tiketController::class, 'cek'])->name('cek');