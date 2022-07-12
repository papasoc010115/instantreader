<?php

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
    return view('home');
});

Route::get('/learn-more/reading-assessment', function () {
    return view('learn-more.reading-assessment');
})->name('learn-more.reading-assessment');

Route::get('/learn-more/reading-programs', function () {
    return view('learn-more.program-overview');
})->name('learn-more.program-overview');