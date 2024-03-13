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

Route::get('/lich-cup-dien-{slug}', [ScheduleDetailController::class, 'show'])
    ->name('schedule_detail.show')
    ->where('slug', '[a-z-]+');

Route::get('/{slug_area}', [ScheduleDetailController::class, 'showArea'])
    ->name('schedule_detail.show_area')
    ->where('slug_area', 'dien-luc-.+');

Route::get('/tinh/{slug_district}', [ScheduleDetailController::class, 'showDistrict'])
    ->name('schedule_detail.show_district');
