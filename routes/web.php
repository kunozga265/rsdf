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
    return view('pages.home');
})->name('home');

Route::get('/our-activities', function () {
    return view('pages.our-activities');
})->name('our-activities');

Route::get('/our-achievements', function () {
    return view('pages.our-achievements');
})->name('our-achievements');

Route::get('/partnerships', function () {
    return view('pages.partnerships');
})->name('partnerships');

Route::get('/future-plans', function () {
    return view('pages.future-plans');
})->name('future-plans');

Route::get('/news', function () {
    return view('pages.news');
})->name('news');
//
//Route::get('/news/{slug}', function () {
//    return view('pages.news-show');
//})->name('news.show');

Route::get('/news/biography-of-the-founder', function () {
    return view('pages.biography-of-the-founder');
})->name('news.biography-of-the-founder');

Route::get('/news/formation-of-ngo', function () {
    return view('pages.formation-of-ngo');
})->name('news.formation-of-ngo');

Route::get('/contact-info', function () {
    return view('pages.contact-info');
})->name('contact-info');

Route::get('/objectives', function () {
    return view('pages.objectives');
})->name('objectives');

Route::get('/ngo-management', function () {
    return view('pages.ngo-management');
})->name('ngo-management');

Route::get('/funding-guarantee', function () {
    return view('pages.funding-guarantee');
})->name('funding-guarantee');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
