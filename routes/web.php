<?php

use App\Http\Controllers\Guests\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/trains', [PageController::class, 'trains'])->name('trains');

Route::get('/today_trains', [PageController::class, 'today_trains'])->name('todaytrains');
