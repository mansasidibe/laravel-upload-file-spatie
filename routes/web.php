<?php

use App\Http\Controllers\ClientController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('client',[ClientController::class,'index'])->name('client');
Route::get('client/create',[ClientController::class,'create'])->name('client.create');
Route::post('client/store',[ClientController::class,'store'])->name('client.store');
