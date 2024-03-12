<?php

use App\Http\Controllers\ScheduleDetailController;
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

Route::get('/', [ScheduleDetailController::class, 'index'])->name('schedule_detail.index');
Route::get('/{slug}', [ScheduleDetailController::class, 'show'])->name('schedule_detail.show');
