<?php

use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\FormController;
use App\Http\Controllers\DiamondController;


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




Route::get('/', [DiamondController::class, 'showDiamonds'])->name('diamonds.show');
Route::get('/form', [DiamondController::class, 'showForm'])->name('form.show');
Route::post('/form', [DiamondController::class, 'submitForm'])->name('form.submit');
Route::post('/store-price', [DiamondController::class, 'storePrice'])->name('price.store');
