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

Route::get('/', function() {
    $crawler = Goutte::request('GET', 'https://lichcupdien.org/');
    $crawler->filter('h3.m1-large')->each(function ($node) {
        echo $node->text() . "</br>";
    });

});
Route::get('/{slug}', [ScheduleDetailController::class, 'show'])->name('schedule_detail.show');
