<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*--------------------------------------------------------------------------
SPA ROUTES
--------------------------------------------------------------------------*/
// These are also valid:
// Route::inertia('/test', 'Test');
// Route::inertia('/test2', 'Test2');

Route::get('/crm', function () {
    return Inertia::render('Test');
});

/*--------------------------------------------------------------------------
Non-SPA ROUTES
--------------------------------------------------------------------------*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/learn-more/reading-assessment', function () {
    return view('learn-more.reading-assessment');
})->name('learn-more.reading-assessment');

Route::get('/learn-more/reading-programs', function () {
    return view('learn-more.program-overview');
})->name('learn-more.program-overview');

Route::get('/learn-more/faq', function () {
    return view('learn-more.faq');
})->name('learn-more.faq');

Route::get('/learn-more/kids-club', function () {
    return view('learn-more.kids-club');
})->name('learn-more.kids-club');

Route::get('/about-us/founder-and-developer', function () {
    return view('about-us.founder');
})->name('about-us.founder');

Route::get('/about-us/testimonials', function () {
    return view('about-us.testimonials');
})->name('about-us.testimonials');

Route::get('/contact-us/book-consultation', function () {
    return view('contact-us.book-consultation');
})->name('contact-us.book-consultation');

Route::get('/contact-us/application', function () {
    return view('contact-us.application');
})->name('contact-us.application');

Route::get('/additional-resources', function () {
    return view('additional-resources');
})->name('additional-resources');

Route::get('/log-in', function () {
    return view('account.log-in');
})->name('account.log-in');

Route::get('/sign-up', function () {
    return view('account.sign-up');
})->name('account.sign-up');